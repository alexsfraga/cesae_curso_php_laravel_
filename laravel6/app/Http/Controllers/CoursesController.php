<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller{

    public function courses() {
        $coursesList = Courses::all();
        return view('courses')
        ->with('coursesList' , $coursesList);
    }
}
