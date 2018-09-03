<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use Session;



class AdminController extends Controller
{
    //
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'is_admin'=>'1'])){
                //if admin login is successful
                return redirect::action('AdminController@panel');
                
            }else{
                //if admin login failed 
                return back()->with('flash_message_error','Invalid Login Credentials');
            }

        }
        return view('auth.adminLogin');
    }

    public function panel(){
        return view('admin.panel');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_logout','Logout Sucessful');
    }
}
