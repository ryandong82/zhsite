<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\Classes\MyUtil;
use App\MainHorizontalPics;
use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        //return 'hello';
        //$article = Article::all();
        //return $article;
        //return ArticleCategory::find(1)->getForeignKey();
        $article_categories = ArticleCategory::query()->orderBy("ord_no")->get();
        //return $articles;
        $horzPics = MainHorizontalPics::all();
        $articles = Article::topN(15);
//        foreach ($articles as $article) {
//            $article["file"] = MyUtil::get_res_file($article->content);
//        }

        ///return $article;
        return response()->view('site.index', array('categories' => $article_categories,
            'articles' => $articles, 'horzPics' => $horzPics));
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
