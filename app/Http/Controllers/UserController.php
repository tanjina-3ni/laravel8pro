<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Tinni';
        $users = array(
            "name" => "Tanjina Rahman",
            "email" => "xyz@gmail.com",
            "phone" => "017********"
        );
        return view('user',compact('name','users'));
    }
}
