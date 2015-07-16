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
}
