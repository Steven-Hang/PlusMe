<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

      use RefreshDatabase;


    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');   //requesting Login Page
        $response->assertSuccessful();  //asserting that the response has a succesful status code
        $response->assertViewIs('auth.login');  //checking if we are served the right page
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = factory(User::class)->make();   // Creates a user object
        $response = $this->actingAs($user)->get('/login');  // Using the newly created user object as a variable and requesting to see login 
        $response->assertRedirect('/home'); // asserting that the user was redirected to the homepage
    }

    public function test_user_can_login_with_correct_credentials()
    {
        $user = factory(User::class)->create([  // Creates a user and inserts him into the database with a new password
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);
        $response = $this->post('/login', [ //  Attempting to login with the newly created user with correct password
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/home'); //  redirecting the user to home
        $this->assertAuthenticatedAs($user);    //  Asserting if the user is Authenticated
    }

    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = factory(User::class)->create([  // Creates a user and inserts him into the database with a new password
            'password' => bcrypt('i-love-laravel'),
        ]);
        
        $response = $this->from('/login')->post('/login', [ //  Attempting to login with the newly created user but with wrong password
            'email' => $user->email,
            'password' => 'invalid-password',   //invalid password
        ]);
        
        $response->assertRedirect('/login');    //  redirecting back the user to login
        $response->assertSessionHasErrors('email'); //  Asserting there's an error in the seesion
        $this->assertTrue(session()->hasOldInput('email')); //  Asserting email field has old input
        $this->assertFalse(session()->hasOldInput('password')); //  Asserting password field doesn't have old input
        $this->assertGuest();   //  Asserting user is still a guest
    }

   /* public function test_remember_me_functionality()
    {
        $user = factory(User::class)->create([  // Creates a user and inserts him into the database with a new password and a Random id
            'id' => random_int(1, 100),
            'password' => bcrypt($password = 'I-love-laravel'),
        ]);
        
        $response = $this->post('/login', [ //  Attempting to login with the newly created user with correct password and remember on
            'email' => $user->email,
            'password' => $password,
            'remember' => 'on',
        ]);
     
        
        $response->assertRedirect('/home'); //  redirecting the user to home

        // asserting that the response contains the given cookie using assertCookie command
        $response->assertCookie(Auth::guard()->getRecallerName(), vsprintf('%s|%s|%s', [    //  Using Auth::guard()->getRecallerName() to find the name of the cookie
            $user->id,                                            //    using vsprintf to compare unencrypted value
            $user->getRememberToken(),
            $user->password,
        ]));
        $this->assertAuthenticatedAs($user);    //  Asserting if the user is Authenticated
    }
    */
    /// public function test_User_Cannot_Login_With_Email_That_Does_Not_Exist()
    /// {
    ///     $response = $this->from('login')->post('login', [   //  Using email and password that doesnt exist
    ///        'email' => 'nobody@example.com',
    //         'password' => 'invalid-password',
    //     ]);
    //     $response->assertRedirect('login');    //  redirecting back the user to login
    //     $response->assertSessionHasErrors('email'); //  Asserting there's an error in the seesion
    //     $this->assertTrue(session()->hasOldInput('email')); //  Asserting email field has old input
    //     $this->assertFalse(session()->hasOldInput('password')); //  Asserting password field doesn't have old input
    //     $this->assertGuest();   //  Asserting user is still a guest
    // }

    public function test_User_Can_Logout()
    {
        $this->be(factory(User::class)->create());  // Creates a user and inserts him into the database and uses it as already logged on
        $response = $this->post('logout');  //  Trying to logout
        $response->assertRedirect('/');    //  redirecting back the user to main page
        $this->assertGuest();   //  Asserting user is still a guest
    }

    public function test_User_Cannot_Logout_When_Not_Authenticated()
    {
        $response = $this->post('logout');  //  Trying to logout
        $response->assertRedirect('/');    //  redirecting back the user to main page
        $this->assertGuest();   //  Asserting user is still a guest
    }
}
