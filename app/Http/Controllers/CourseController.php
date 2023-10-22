<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addCourse(Request $req){
        $req->validate([
            'title' => 'required',
            'type' => 'required',
            'details' => 'required'
        ]);
        $course = new Course();
        $course->title = $req->title;
        $course->type = $req->type;
        $course->details = $req->details;
        $course->save();
        
        return back();
    }
}
