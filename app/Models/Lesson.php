<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Lesson extends Model
{
    protected $fillable = [
        'name',
        'image',
        'user_id',
        'category_id',
        'result',
    ];

    public $timestamps = true;

    public static function getCat ()
    {
        return DB::table('lessons')->select(
            DB::raw('count("lessons.name") as student'),
            'lessons.name',
            'lessons.image',
            'categories.name as nameCat')->join('categories', 'categories.id', '=', 'lessons.category_id')->groupBy('name')->take(4)->get();
    }
    public function user ()
    {
        return $this->belongTo(User::class);
    }

    public function lessonwords ()
    {
        return $this->hasMany(LessonWord::class);
    }

    public function category ()
    {
        return $this->belongTo(Category::class);
    }
}
