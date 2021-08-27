<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Courses;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function courses(){
        $coursesList = Courses::all();
        return view('courses')
        ->with('coursesList', $coursesList);
    }
    public function generic(){
        return view('generic');
    }
    public function submit(){
        request()->validate([
            "name"=>["required"],
            "email"=>["required","email"],
            "message"=>["required"],
        ]);
        $contact = new Contact();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->message = request()->message;
        $contact->save();

        $contactList = Contact::all();

        return view('submited')
            ->with("contactList" , $contactList);
    }

    public function list(){
        $contactList = Contact::all();
        return view('submited')
        ->with("contactList" , $contactList);
    }
}
