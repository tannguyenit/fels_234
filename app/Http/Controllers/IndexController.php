<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Models\Activity;
use App\Models\Lesson;
use DB;
use Illuminate\Database\Query\Builder;

class IndexController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('home');
        }
        $arCat=Lesson::getCat();
        return view('index.index', compact('arCat'));
    }

    public function home()
    {
        $this->arCourse = Activity::where('user_id', Auth()->id())->get()->toArray();
        view()->share(['arCourse' => $this->arCourse]);
        return view('index.home');
    }

}
