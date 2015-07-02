<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
use App\UploadedRes;
use App\Helper\ImageSplitter;
use Illuminate\View\View;
use App\Helper\MyUtil;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return response()->view('admin.article', array('articles'=>$articles));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

        $categories = ArticleCategory::all();
        $resp = \View::make('admin.articleCreation', array('categories'=>$categories));
        headers_sent();
        return $resp;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($data)
    {
        //
        $article = new Article();
        $splitter = new ImageSplitter($data['article_content']);
        $res = new UploadedRes();

        $img = $splitter->getImageContent();
        $res->filename = MyUtil::save_file($img);
        $res->mime = $splitter->getMime();
        $res->save();
        $article->title = $data['article_title'];
        $article->category = $data['article_category'];
        $article->content = $splitter->getPlainContent($res->id);
        $article->save();

//        return response()->json(array("success" => "1", "new_id" => 1), 200,
//            array('Content-Type:text/json;charset=UTF-8'));

        return response()->json(array("success" => "1", "new_id" => $res->id), 200,
            array('Content-Type:text/json;charset=UTF-8'));
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
