<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Lesson;
use App\Models\Word;
use App\Models\LessonWord;
use App\Models\Learned;
use Session;
use Auth;
use DB;

class LearnController extends Controller
{

    protected $learned;
    protected $lesson;
    protected $lessonWord;

    function __construct(
        Lesson $lesson,
        LessonWord $lessonWord,
        Learned $learned
    ) {
        $this->lessonWord = $lessonWord;
        $this->lesson = $lesson;
        $this->learned = $learned;
    }

    public function index($id, $slug, $idLesson, $lesson, $action)
    {
        if ($action == 'start') {
            $name = $this->lessonWord->getLesson($id, $idLesson);

            if ($name) {
                $lessonWord = $this->lessonWord->getLessonWord($idLesson)->toArray();

                if (!Session::has('arQuestion')) {
                    Session::put('arQuestion', $lessonWord);
                }

                $lessonWordSession = Session::get('arQuestion');
                $checkLessonWord = $this->lessonWord->checkLessonWord($idLesson, $lessonWordSession[0]['id'])->toArray();
                $question = $lessonWordSession[0];
                $checkLessonWord[3] = $question;
                $rand = rand(0, 3);
                $arr = [0, 1, 2, 3];
                $answerOne = array_rand($arr, 1);
                unset($arr[$answerOne]);
                $answerTwo = array_rand($arr, 1);
                unset($arr[$answerTwo]);
                $answerThirt = array_rand($arr, 1);
                unset($arr[$answerThirt]);
                $answerFour = array_rand($arr, 1);
                unset($arr[$answerFour]);
                return view('learn.learn', compact('name', 'rand', 'question', 'answerOne', 'answerTwo', 'answerThirt', 'answerFour', 'checkLessonWord'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->action('IndexController@index')->with(['result' => trans('layout.notsearch')]);
        }
    }

    public function deleteCourse()
    {
        if (Request::ajax()) {
            DB::beginTransaction();
            try {
                $id = Request::get('id');
                $arLearn = Learned::where('user_id', Auth::user()->id)->where('course_id', $id)->get();
                foreach ($arLearn as $value) {
                    $arDel[] = $value->id;
                }
                Learned::whereIn('id', $arDel)->delete();
                DB::commit();

                return config('setting.zero');
            } catch (Exception $e) {
                DB::rollBack();
            }
        }
    }

    public function change_question()
    {
        if (Request::ajax()) {
            $id = Request::get('id');
            $number = Request::get('number');
            $idLesson = Request::get('idLesson');
            $LessonWord = $this->lessonWord->getLessonWord($idLesson)->toArray();

            if (!Session::has('arQuestion')) {
                    Session::push('arQuestion', $lessonWord);
            }

            $lessonWordSession = Session::get('arQuestion');

            if ($number == count($LessonWord)) {
                Session::forget('arQuestion');

                return config('setting.admin');
            } else {
                $idCourse = Request::get('idCourse');
                $idLesson = Request::get('idLesson');
                $name = $this->lessonWord->getLesson($idCourse, $idLesson);

                if ($name) {
                    $lessonWord = $this->lessonWord->getLessonWord($idLesson)->toArray();
                    $checkLessonWord = $this->lessonWord->checkLessonWord($idLesson, $lessonWordSession[$number]['id'])->toArray();
                    $question = $lessonWordSession[$number];
                    $checkLessonWord[3] = $question;
                    $rand = rand(0, 3);
                    $arr = [0, 1, 2, 3];
                    $answerOne = array_rand($arr, 1);
                    unset($arr[$answerOne]);
                    $answerTwo = array_rand($arr, 1);
                    unset($arr[$answerTwo]);
                    $answerThirt = array_rand($arr, 1);
                    unset($arr[$answerThirt]);
                    $answerFour = array_rand($arr, 1);
                    unset($arr[$answerFour]);
                    return view('learn.question', compact('name', 'rand', 'question', 'answerOne', 'answerTwo', 'answerThirt', 'answerFour', 'checkLessonWord'));
                }
            }
        }
    }

    public function answer()
    {
        if (Request::ajax()) {
            $checkLearn = $this->learned->where('lesson_word_id', Request::get('question'))->where('user_id', Auth()->id())->first();

            if ($checkLearn) {
                $arLearn = [
                    'user_id' => Auth()->id(),
                    'course_id' => Request::get('idCourse'),
                    'lesson_id' => Request::get('idLesson'),
                    'lesson_word_id' => Request::get('question'),
                ];
                $anser = $this->learned->where($arLearn)->update(['correct' => Request::get('correct'),]);
            } else {
                $arLearn = [
                    'user_id' => Auth()->id(),
                    'course_id' => Request::get('idCourse'),
                    'lesson_id' => Request::get('idLesson'),
                    'lesson_word_id' => Request::get('question'),
                    'correct' => Request::get('correct'),
                ];
                $anser = $this->learned->create($arLearn);
            }
            return $anser['correct'];

        }
    }
}
