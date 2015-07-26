<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes\MyUtil;

class Article extends Model
{
    //
    public function category(){
        return $this->belongsTo('App\ArticleCategory', 'category');
    }

    public function file(){
        return MyUtil::get_res_file($this->content);
    }
    public function scopeTopN($query, $num)
    {
        return $query->orderBy('created_at', 'desc')->take($num)->get();
    }
}
