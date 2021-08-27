<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function principal(){
        return view('principal');
    }

    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function show(){
        request()->validate([
            $name = request()->name,
            $email = request()->email,
            $message = request()->message
        ]);
        $contact = new Contact();
            $contact->name = request()->$name;
            $contact->email = request()->$email;
            $contact->message = request()->$message;
        $contact->save();

        return view('show')
        ->with('name', request()->name)
        ->with('email', request()->email)
        ->with('message', request()->message);

    }
}
