<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UploadedRes;
use App\Classes\MyUtil;
use App\FooterPics;
use Illuminate\Support\Facades\DB;


class AdminFooterPicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $footerPics = FooterPics::all();
        $resp = view('admin.footerpicseq', array('footerPics' => $footerPics));
        return $resp;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $pics = new FooterPics();
        $pics->mime = $request->file('myFile')->getMimeType();
        $filename = 'footer_' . MyUtil::gen_file_name($request->file('myFile')->guessClientExtension());
        $pics->filename = $filename;
        $pics->save();
        $request->file('myFile')->move($_SERVER['DOCUMENT_ROOT'] . "/statics/images/upload", $filename);
        return $pics;
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
    public function destroy(Request $request)
    {
        DB::connection()->getPdo()->beginTransaction();
        try {
            foreach ($request->request->get("picIdList") as $id) {
                $footerPic = FooterPics::find($id);
                $footerPic->delete();
            }
            DB::connection()->getPdo()->commit();
            return response()->json(array("ok" => 1), 200, ['Content-Type:text/json;charset=UTF-8']);
        } catch (\PDOException $e) {
            DB::connection()->getPdo()->rollback();
        }

    }
}
