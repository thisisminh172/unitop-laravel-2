<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    function read(){
        $posts = User::find(3)
        ->posts;
        return $posts;
        
    }
    public function add(){
        return view('user.reg');
    }
}
