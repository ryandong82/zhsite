<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::model('article', 'App\Article');
Route::model('teacher', 'App\Teacher');
Route::model('teacher_group', 'App\TeacherGroup');

Route::get('/teacherpage', array('as'=>'site.teachers', 'uses'=>'TeacherPageController@index'));
Route::get('/teacher-{id}.html', array('as'=>'site.teacher', 'uses'=>'TeacherPageController@show'));
Route::get('/articlepage/article-{articleId}.html', array('as' => 'site.article', 'uses'=> 'ArticleSiteController@show'));
Route::get('/category/category-{categoryId}-{pageNo}.html', array('as' => 'site.category', 'uses'=> 'ArticleCategoryController@show'));
Route::get('/contact', 'ContactController@index');
Route::get('/about', 'AboutController@index');
Route::get('/index', 'IndexController@index');
Route::get('/', 'IndexController@index');
Route::get('/admin', 'AdminController@index');
//Route::get('/admin/article', 'ArticleController@index');
//Route::controller('/admin/article', 'ArticleController');


Route::resource('articles', 'ArticleController');
Route::post('/teachers/{teachers}', array('as' => 'teachers.update', 'uses'=> 'TeacherController@update'));
Route::resource('teachers', 'TeacherController', array('except' => 'update'));