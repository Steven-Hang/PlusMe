<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //Show All Users 
    public function index()
    {
        $users = User::paginate(15);;
        return view('admin.users', compact('users'));
    }
    //Edit 
    public function edit()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    public function update()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
    //Shows User Information based on user id -> for profile page
    public function show($id){
       //$user = User::whereid($id)->first();
       $user = Auth::user();
      
       if($user){
        //User exist 
        //return view('pages/profile')->withUser($user);
        return view('pages/profile', compact('user',$user));
       }
       else{
        //User doesn't exist 
        dd($user);
       }
    }

    //Updates User profile picture
    public function update_avatar(Request $request){
 
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        $user = Auth::user();
 
        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
 
        $request->avatar->storeAs('avatars',$avatarName);
 
        $user->avatar = $avatarName;
        $user->save();
 
        return back()
            ->with('success','Your Profile Picture Has Been Updated');
 
    }
  
    //changes user password
    public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }
}
