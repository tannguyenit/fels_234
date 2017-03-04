<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonWord extends Model
{
    protected $fillable = [
        'name',
        'lesson_id',
        'word_id',
        'word_answer_id',
    ];

    public $timestamps = true;

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function wordAnswer()
    {
        return $this->belongsTo(WordAnswer::class);
    }

    public function learneds()
    {
        return $this->hasMany(Learned::class);
    }

    public function totalNumber($id)
    {
        return LessonWord::where('lesson_id', $id)->count();
    }

    public function getVocabuary($id)
    {
        return LessonWord::with('wordAnswer', 'word')->where('word_id', $id)->first();
    }

    public function getLessonWordCount($id)
    {
        return LessonWord::where('lesson_id', $id)->count();
    }

    public function getLessonWord($lessonId)
    {
        return LessonWord::with('wordAnswer', 'word')
            ->where('lesson_id', $lessonId)
            ->orderByRaw('RAND()')->get();
    }

    public function checkLessonWord($lessonId, $id)
    {
        return LessonWord::with('wordAnswer', 'word')
            ->where('lesson_id', $lessonId)->where('id', '<>', $id)->orderByRaw('RAND()')->take(3)->get();
    }

    public function getLesson($id)
    {
        return LessonWord::with('wordAnswer', 'word')->where('lesson_id', $id)->get();
    }

    public function getLessonName($id, $level)
    {
        return Lesson::where('course_id', $id)->where('level', $level)->first();
    }

}
