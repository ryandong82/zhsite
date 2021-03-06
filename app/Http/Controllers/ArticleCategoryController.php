<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ArticleCategory;
use App\Article;
use App\Teacher;

class ArticleCategoryController extends Controller
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
     * @param  int $id
     * @return Response
     */
    public function show($id, $pageNo)
    {
        //$category = ArticleCategory::with("articles")->find($id);
        $category = ArticleCategory::find($id);
        $teachers = Teacher::topN(6);//query()->orderBy('ord_no')->where('in_intro', '1')->take(6)->get();
        $articles = $category->articles()->getResults();
        $other_articles = Article::topN(6);
        $categories_in_pane = ArticleCategory::all();
        //dd($categories_in_pane);
        //$articleCnt = $category->articles()->getResults();
        $resp = view('site.category', array('category' => $category,
            'teachers' => $teachers, 'articles' => $articles, 'other_articles' => $other_articles,
            'categories_in_pane'=>$categories_in_pane));
        //$resp = view('site.test', array('category'=>$category, 'teachers'=>$teachers, 'articles'=>$articles));
        return $resp;
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
