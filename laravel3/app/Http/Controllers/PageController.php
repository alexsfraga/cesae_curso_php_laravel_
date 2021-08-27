<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }
    public function contacts(){
        return view("contacts");
    }
    public function storecontacts(){
        $name = request()->name;
        $email = request()->email;
        $message = request()->message;
        return view("success")
        ->with('name', $name)
        ->with('email', $email)
        ->with('message', $message);
    }
}
