<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Learned;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use App\Models\LessonWord;
use App\Models\WordAnswer;
use Auth;

class CourseController extends Controller
{
    protected $lessonWord;
    protected $Learned;
    protected $WordAnswer;

    public function __construct(
        LessonWord $lessonWord,
        Learned $learned,
        WordAnswer $wordAnswer,
        Lesson $lesson,
        Category $category
    ) {
        $this->lessonWord = $lessonWord;
        $this->learned = $learned;
        $this->wordAnswer = $wordAnswer;
        $this->lesson = $lesson;
        $this->category = $category;
    }

    public function index($id = null)
    {
        if ($id == null) {
            $id = 1;
        }

        $arCourse = $this->category->getCourse($id);
        $arTotal[];
        if ($arCourse) {
            if (count($arCourse->courses) > 0) {
                foreach ($arCourse->courses as $key => $value) {
                    $count = $this->learned->getMemberLearn($value->id);    //Get total member is studying this course
                    $arTotal[] = [
                        'id' => $value->id,
                        'cat' => $arCourse->name,
                        'name' => $value->name,
                        'image' => $value->image,
                        'total' => count($count),
                    ];
                }
            } else {
                return redirect()->action('IndexController@index')->with(['result' => trans('layout.notsearch')]);
            }
        } else {
            return redirect()->action('IndexController@index')->with(['result' => trans('layout.notsearch')]);
        }

        $arCat = $this->category->all();
        return view('course.index', compact('arTotal', 'arCat'));
    }

}

