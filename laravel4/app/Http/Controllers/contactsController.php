<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    public function contacts(){
        return view('contacts');
    }
    public function success(){
        $name = request() -> name;
        $email = request() -> email;
        $message = request() -> message;
        return view('success')
        ->with('name', $name)
        ->with('email', $email)
        ->with('message', $message);
    }
}
