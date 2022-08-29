<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function create_user(Request $request){
        return "<h1>create user </h1>";
    }
    public function ban_user(Request $request){
        if(Auth::check()){
            return "<h1>User is Authenticated</h1>";
        }
        else{
            return "<h1>The user is not autnenticated</h1>";
        }
    }
    public function edit_info(){
        return "<h1>Edit User Infor </h1>";
    }
}
