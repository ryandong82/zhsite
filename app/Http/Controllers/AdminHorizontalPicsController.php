<?php

namespace App\Http\Controllers;

use App\MainHorizontalPics;
use Illuminate\Http\Request;
use App\Classes\MyUtil;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminHorizontalPicsController extends Controller
{
    public function index()
    {
        $horizontalPics = MainHorizontalPics::all();
        $resp = view('admin.horizontalPics', array('horizontalPics' => $horizontalPics));
        return $resp;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $pics = new MainHorizontalPics();
        $pics->mime = $request->file('myFile')->getMimeType();
        $filename = 'horPic_' . MyUtil::gen_file_name($request->file('myFile')->guessClientExtension());
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
                $mainHorizontalPics = MainHorizontalPics::find($id);
                $mainHorizontalPics->delete();
            }
            DB::connection()->getPdo()->commit();
            return response()->json(array("ok" => 1), 200, ['Content-Type:text/json;charset=UTF-8']);
        } catch (\PDOException $e) {
            DB::connection()->getPdo()->rollback();
        }

    }
}
