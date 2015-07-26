<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\TeacherGroup;

class TeacherPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teacher_groups = TeacherGroup::all();
        //return $articles;
        $teachers = Teacher::all();
        ///return $article;
        return response()->view('site.teachers', array('groups' => $teacher_groups, 'all_teachers' => $teachers,
            'cnt' => 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
        $teacher = Teacher::find($id);
        $teachers = Teacher::topN(6);
        $articles = Article::topN(6);
        $categories_in_pane = ArticleCategory::all();
        return response()->view('site.teacher', array('teacher' => $teacher, 'teachers' => $teachers, 'other_articles' => $articles,
            'categories_in_pane' => $categories_in_pane));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
