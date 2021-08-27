<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        $logoUrl = "/logo.png";
        return view('index')
        ->with('logoUrl', $logoUrl);
    }
}
