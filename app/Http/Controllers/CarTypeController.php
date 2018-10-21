<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
    }

    public function index(){
        return view('pages/car_type');
    }

}
