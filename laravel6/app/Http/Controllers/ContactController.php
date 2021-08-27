<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }
    public function resultform(){
        request()->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "message" => ["required"],
        ]);
        return view('resultform')
            ->with('name', request()->name )
            ->with('email', request()->email )
            ->with('message', request()->message );
    }
}
