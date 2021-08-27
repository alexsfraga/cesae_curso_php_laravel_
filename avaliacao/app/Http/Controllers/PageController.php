<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Tour;
use App\Models\About;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class PageController extends Controller{

    public function index(){
        return view('index');
    }

    public function about(){
        $listAbout = About::all();
        return view('About')
            ->with('listAbout' , $listAbout);
    }
    public function tour(){
        $listTour = Tour::all();
        return view('tour')
            ->with('listTour' , $listTour);
    }

    public function contact(){
         return view('contact');
    }

    public function submit(){
        request()->validate([
            "name"=>["required"],
            "email"=>["required","email"],
            "subject"=>["required"],
            "message"=>["required"],
        ]);
        $contact = new Contact();
        $contact->name = request()->name;
        $contact->email = request()->email;
        $contact->subject = request()->subject;
        $contact->message = request()->message;
        $contact->save();
        $result = null;

        if (Contact::where('email', '=', request()->email)->exists()) {
            $result = 1;
         }
         return view('contact')
            ->with("result" , $result);
    }

}
