<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;
use App\UploadedRes;
use App\Classes\ImageSplitter;
use Illuminate\View\View;
use App\Classes\MyUtil;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
        return response()->view('admin.article', array('articles' => $articles));
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
        $resp = view('admin.articleCreation', array('categories' => $categories));
        return $resp;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $article = new Article();
        $splitter = new ImageSplitter($request->request->get('article_content'));
        if ($splitter->is_matched) {
            for ($i = 0; $i < $splitter->is_matched; $i++) {

                $res = new UploadedRes();

                $img = $splitter->getImageContent()[$i];
                $res->filename = MyUtil::save_file($img);
                $res->mime = $splitter->getMime()[$i];
                $res->save();
                $arr_id[] = $res->id;
            }
            $article->content = $splitter->getPlainContent($arr_id);
        } else {
            $article->content = $request->request->get('article_content');
        }
        $article->title = $request->request->get('article_title');
        $article->category = $request->request->get('article_category');
        $article->save();

//        return response()->json(array("success" => "1", "new_id" => 1), 200,
//            array('Content-Type:text/json;charset=UTF-8'));

        return response()->json(array("success" => "1", "new_id" => $article->id), 200,
            array('Content-Type:text/json;charset=UTF-8'));
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
        DB::connection()->getPdo()->beginTransaction();
        try {
            $article = Article::find($id);
            $article->delete();
            DB::connection()->getPdo()->commit();
            return response()->json(array("ok" => 1), 200, ['Content-Type:text/json;charset=UTF-8']);
        } catch (\PDOException $e) {
            DB::connection()->getPdo()->rollback();
            return response()->json(array("ok" => 0), 500, ['Content-Type:text/json;charset=UTF-8']);
        }
    }
}
