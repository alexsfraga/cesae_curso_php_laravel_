<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        $representantes=['André','João', 'Maria'];
        return view('about')
        ->with('representantes', $representantes);
    }
}
