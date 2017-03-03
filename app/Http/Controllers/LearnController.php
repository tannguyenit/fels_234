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
        Learned $learned,
    ) {
        $this->lessonWord = $lessonWord;
        $this->lesson = $lesson;
        $this->learned = $learned;
    }

    public function index($id, $slug, $level, $lesson, $action)
    {
        if ($action == 'start') {
            $checkLesson = $this->lessonWord->getLessonName($id, $level);

            if ($checkLesson) {
                $name = $this->lessonWord->getLesson($checkLesson->id);

                $lessonWord = $this->lessonWord->getLessonWord($checkLesson->id)->toArray();

                if (!Session::has('arQuestion')) {
                    Session::put('arQuestion', $lessonWord);
                }
                $lessonWordSession = Session::get('arQuestion');

                $checkLessonWord = $this->lessonWord->checkLessonWord($checkLesson->id, $lessonWordSession[0]['id'])->toArray();
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
                $countArray = count($lessonWord);

                return view('learn.learn', compact('countArray', 'name', 'rand', 'question', 'answerOne', 'answerTwo', 'answerThirt', 'answerFour', 'checkLessonWord'));
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
            $number = Request::get('number');
            $idLesson = Request::get('idLesson');
            $idCourse = Request::get('idCourse');
            $checkLesson = $this->lessonWord->getLessonName($idCourse, $idLesson);
            $LessonWord = $this->lessonWord->getLessonWord($checkLesson->id)->toArray();

            if (!Session::has('arQuestion')) {
                    Session::push('arQuestion', $lessonWord);
            }

            $lessonWordSession = Session::get('arQuestion');

            if ($number == count($LessonWord)) {
                Session::forget('arQuestion');

                return config('setting.admin');
            } else {
                if ($checkLesson) {
                    $name = $this->lessonWord->getLesson($checkLesson->id);
                    $lessonWord = $this->lessonWord->getLessonWord($checkLesson->id)->toArray();
                    $checkLessonWord = $this->lessonWord->checkLessonWord($checkLesson->id, $lessonWordSession[$number]['id'])->toArray();
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

                    return view('learn.question', compact('number' ,'name', 'rand', 'question', 'answerOne', 'answerTwo', 'answerThirt', 'answerFour', 'checkLessonWord'));
                }
            }
        }
    }

    public function answer()
    {
        if (Request::ajax()) {
            $checkLesson = $this->lessonWord->getLessonName(Request::get('idCourse'), Request::get('idLesson'));
            $checkLearn = $this->learned->where('lesson_id', $checkLesson->id)->where('lesson_word_id', Request::get('question'))->where('user_id', Auth()->id())->first();

            if ($checkLearn) {
                $arLearn = [
                    'user_id' => Auth()->id(),
                    'course_id' => Request::get('idCourse'),
                    'lesson_id' => $checkLesson->id,
                    'lesson_word_id' => Request::get('question'),
                ];
                $anser = $this->learned->where($arLearn)->update(['correct' => Request::get('correct'),]);
            } else {
                $arLearn = [
                    'user_id' => Auth()->id(),
                    'course_id' => Request::get('idCourse'),
                    'lesson_id' => $checkLesson->id,
                    'lesson_word_id' => Request::get('question'),
                    'correct' => Request::get('correct'),
                ];
                $anser = $this->learned->create($arLearn);
            }

            return $anser['correct'];
        }
    }
}
