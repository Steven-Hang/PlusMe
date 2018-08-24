<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
