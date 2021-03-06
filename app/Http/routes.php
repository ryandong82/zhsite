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
Route::model('footerPic', 'App\FooterPics');
Route::model('main_horizontal_pics', 'App\MainHorizontalPics');
Route::model('article_categories', 'App\ArticleCategory');


Route::get('/siteFooterPic', array('as' => 'site.FooterPics', 'uses' => 'SiteFooterPicsController@index'));
Route::get('/teacherpage', array('as' => 'site.teachers', 'uses' => 'TeacherPageController@index'));
Route::get('/teacher-{id}.html', array('as' => 'site.teacher', 'uses' => 'TeacherPageController@show'));
Route::get('/articlepage/article-{articleId}.html', array('as' => 'site.article', 'uses' => 'ArticleSiteController@show'));
Route::get('/category/category-{categoryId}-{pageNo}.html', array('as' => 'site.category', 'uses' => 'ArticleCategoryController@show'));
Route::get('/contact', array('as' => 'site.contact', 'uses' => 'ContactController@index'));
Route::get('/about', array('as' => 'site.about', 'uses' => 'AboutController@index'));
Route::get('/index', array('as' => 'site.index', 'uses' => 'IndexController@index'));
Route::get('/', array('as' => 'site.root', 'uses' => 'IndexController@index'));
Route::get('/admin', 'AdminController@index');
Route::get('/colabor', array('as' => 'site.colabor', 'uses' => 'ColaborController@index'));
Route::get('/classes', array('as' => 'site.classes', 'uses' => 'ClassController@index'));
//Route::get('/admin/article', 'ArticleController@index');
//Route::controller('/admin/article', 'ArticleController');

Route::resource('articles', 'ArticleController');
Route::post('/teachers/{teachers}', array('as' => 'teachers.update', 'uses' => 'TeacherController@update'));
Route::resource('teachers', 'TeacherController', array('except' => 'update'));
Route::delete('/footerPics', array('as' => 'footerPics.destroy', 'uses' => 'AdminFooterPicsController@destroy'));
Route::resource('footerPics', 'AdminFooterPicsController', array('except' => 'destroy'));
Route::delete('/mainHorizontalPics', array('as' => 'mainHorizontalPics.destroy', 'uses' => 'AdminHorizontalPicsController@destroy'));
Route::resource('mainHorizontalPics', 'AdminHorizontalPicsController', array('except' => 'destroy'));


