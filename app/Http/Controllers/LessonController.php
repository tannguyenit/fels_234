<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class LessonController extends Controller
{
    public function index($id, $slug)
    {
        return view('lesson.index');
    }

    public function lesson($id, $slug, $idLesson)
    {
        return view('lesson.lesson');
    }

    public function cat()
    {
        return view('lesson.cat');
    }

}

