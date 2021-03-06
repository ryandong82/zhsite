<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Teacher;
use App\Classes\MyUtil;
use App\ArticleCategory;

class ArticleSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $teachers = Teacher::topN(6);
        $article = Article::find($id);
        $other_articles = Article::topN(6);
        $categories_in_pane = ArticleCategory::all();
        $article->content = MyUtil::replace_reference_tag($article->content) ?: $article->content;
        $resp = view('site.article', array('article'=>$article, 'teachers'=>$teachers,
            'other_articles'=>$other_articles, 'categories_in_pane' => $categories_in_pane));
        return $resp;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
