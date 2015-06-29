<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherGroup extends Model
{
    //
    public function teachers(){
        return $this->hasMany('App\Teacher', 'group');
    }
}
