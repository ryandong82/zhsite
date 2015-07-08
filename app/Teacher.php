<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function pic()
    {
        return $this->hasOne('App\UploadedRes', 'id');
    }
    public function group()
    {
        return $this->belongsTo('App\TeacherGroup', 'id');
    }
}
