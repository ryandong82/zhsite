<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function pic()
    {
        return $this->belongsTo('App\UploadedRes', 'photo', 'id');
    }
    public function group()
    {
        return $this->belongsTo('App\TeacherGroup', 'group', 'id');
    }

    public function scopeTopN($query, $num)
    {
        return $query->where('in_intro', 1)->orderBy('ord_no')->take($num)->get();
    }
}
