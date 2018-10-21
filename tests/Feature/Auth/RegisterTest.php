<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_User_Can_View_A_Registration_Form()
    {
        $response = $this->get('register'); //requesting Register Page
        $response->assertSuccessful();  //asserting that the response has a succesful status code
        $response->assertViewIs('auth.register');  //checking if we are served the right page
    }

    public function test_User_Cannot_View_A_Registration_Form_When_Authenticated()
    {
        $user = factory(User::class)->make();   // Creates a user object
        $response = $this->actingAs($user)->get('register');  // Using the newly created user object as a variable and requesting register 
        $response->assertRedirect('dashboard'); // asserting that the user was redirected to the homepage
    }

    public function testUserCanRegister()
    {
        $response = $this->post('/register', [ //  Attempting to Register a new user by sending User Data through post method
            'first_name' => 'Oliver',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => '13@test.com',
            'password' => '123Password',
            'password_confirmation' => '123Password',
            'licence_number' => '0009870534',
            'terms' => '1',
            'is_activated' => '1'
        ]);
        $response->assertRedirect('/login'); //  redirecting the user to login
    }

    public function test_User_Cannot_Register_Without_Name()
    {
        $response = $this->from('register')->post('register', [ //  Attempting to register a new user but with no First Name
            'first_name' => '',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => 'john@example.com',
            'password' => 'i-love-laravel',
            'password_confirmation' => 'i-love-laravel',
            'licence_number' => '0009870534',
            'terms' => '1'
        ]);
        $users = User::all();   //  Selecting all Users 
        $this->assertCount(0, $users);  //  counting the total users and making sure they are 0 
                                        //  since the database has been refreshed before this function was use
        $response->assertRedirect('register');    //  redirecting back the user to register
        $response->assertSessionHasErrors('first_name'); //  Asserting there's an error in the seesion
        $this->assertTrue(session()->hasOldInput('email')); //  Asserting email field has old input
        $this->assertFalse(session()->hasOldInput('password')); //  Asserting password field doesn't have old input
        $this->assertGuest();   //  Asserting user is still a guest
    }

    public function test_User_Cannot_Register_Without_Email()
    {
        $response = $this->from('register')->post('register', [ //  Attempting to register a new user but with no First Name
            'first_name' => 'Oliver',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => '',
            'password' => 'i-love-laravel',
            'password_confirmation' => 'i-love-laravel',
            'licence_number' => '0009870534',
            'terms' => '1'
        ]);
        $users = User::all();   //  Selecting all Users 
        $this->assertCount(0, $users);  //  counting the total users and making sure they are 0 
                                        //  since the database has been refreshed before this function was use
        $response->assertRedirect('register');    //  redirecting back the user to register
        $response->assertSessionHasErrors('email'); //  Asserting there's an error in the seesion
        $this->assertGuest();   //  Asserting user is still a guest
    }

    public function test_User_Cannot_Register_With_Invalid_Email()
    {
        $response = $this->from('register')->post('register', [ //  Attempting to register a new user but with no First Name
            'first_name' => 'Oliver',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => 'invalid-email',
            'password' => 'i-love-laravel',
            'password_confirmation' => 'i-love-laravel',
            'licence_number' => '0009870534',
            'terms' => '1'
        ]);
        $users = User::all();   //  Selecting all Users 
        $this->assertCount(0, $users);  //  counting the total users and making sure they are 0 
                                        //  since the database has been refreshed before this function was use
        $response->assertRedirect('register');    //  redirecting back the user to register
        $response->assertSessionHasErrors('email'); //  Asserting there's an error in the seesion
        $this->assertGuest();   //  Asserting user is still a guest
    }

    public function test_User_Cannot_Register_Without_Password_and_Password_Confirmation()
    {
        $response = $this->from('register')->post('register', [ //  Attempting to register a new user but with no First Name
            'first_name' => 'Oliver',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => 'john@example.com',
            'password' => '',
            'password_confirmation' => '',
            'licence_number' => '0009870534',
            'terms' => '1'
        ]);
        $users = User::all();   //  Selecting all Users 
        $this->assertCount(0, $users);  //  counting the total users and making sure they are 0 
                                        //  since the database has been refreshed before this function was use
        $response->assertRedirect('register');    //  redirecting back the user to register
        $response->assertSessionHasErrors('password','password_confirmation'); //  Asserting there's an error in the seesion
        $this->assertGuest();   //  Asserting user is still a guest
    }

    public function test_User_Cannot_Register_With_Passwords_Not_Matching()
    {
        $response = $this->from('register')->post('register', [ //  Attempting to register a new user but with no First Name
            'first_name' => 'Oliver',
            'last_name' => 'Twist',
            'date_of_birth' => '1993-06-08',
            'contact_number' => '0478174422',
            'email' => 'john@example.com',
            'password' => '123Password',
            'password_confirmation' => 'Password123',
            'licence_number' => '0009870534',
            'terms' => '1'
        ]);
        $users = User::all();   //  Selecting all Users 
        $this->assertCount(0, $users);  //  counting the total users and making sure they are 0 
                                        //  since the database has been refreshed before this function was use
        $response->assertRedirect('register');    //  redirecting back the user to register
        $response->assertSessionHasErrors('password','password_confirmation'); //  Asserting there's an error in the seesion
        $this->assertGuest();   //  Asserting user is still a guest
    }
}
