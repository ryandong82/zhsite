<?php

namespace App\Http\Controllers;

use App\Classes\MyUtil;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TeacherGroup;
use App\Teacher;
use App\UploadedRes;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groups = TeacherGroup::all();
        $teachers = Teacher::all();
        ///return $article;
        return response()->view('admin.teacherAdmin', array('teachers' => $teachers, 'groups' => $groups));
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
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $res = new UploadedRes();
        $res->mime = $request->file('myFile')->getMimeType();
        $filename = MyUtil::gen_file_name($request->file('myFile')->guessClientExtension());
        $res->filename = $filename;
        $request->file('myFile')->move($_SERVER['DOCUMENT_ROOT'] . "/statics/images/upload", $filename);
        //

        DB::connection()->getPdo()->beginTransaction();
        try {
            $res->save();
            $teacher->name = $request->request->get("teacher_name");
            $teacher->visible = $request->request->get("teacher_hidden") == 0 ? 1 : 0;
            $teacher->in_intro = $request->request->get("show_in_intro");
            $teacher->group = $request->request->get("group_id");
            $teacher->ord_no = $request->request->get("order_num");
            $teacher->descript = $request->request->get("teacher_desc");
            $teacher->content = $request->request->get("teacher_content");
            $teacher->photo = $res->id;
            $teacher->save();
            $arr = array(
                "success" => 1,
                "teacher_name" => $teacher->name,
                "teacher_desc" => $teacher->descript,
                "teacher_id" => $teacher->id,
                "photo_file" => $filename,
                "create_date" => $teacher->created_at->toDateTimeString(),
                "order_num" => $teacher->ord_no,
                "visible" => $teacher->visible,
                "show_in_intro" => $teacher->in_intro,
                "group_id" => $teacher->group,
                "teacher_content" => $teacher->content,
                "group_name" => $teacher->group()->getResults()["name"]);
            DB::connection()->getPdo()->commit();
            return response()->json($arr, 200, array('Content-Type' => 'text/json;charset=UTF-8'));
        } catch (\PDOException $e) {
            DB::connection()->getPdo()->rollback();
            $arr = array('success' => 0);
            return response()->json($arr, 500, array('Content-Type' => 'text/json;charset=UTF-8'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        if ($teacher = Teacher::find($id)) {
            $arr = array(
                "success" => 1,
                "teacher_name" => $teacher->name,
                "teacher_desc" => $teacher->descript,
                "teacher_id" => $teacher->id,
                "photo_file" => $teacher->pic()->getResults()['filename'],
                "create_date" => $teacher->created_at,
                "order_num" => $teacher->ord_no,
                "visible" => $teacher->visible,
                "show_in_intro" => $teacher->in_intro,
                "group_id" => $teacher->group,
                "teacher_content" => $teacher->content,
                "group_name" => $teacher->group()->getResults()["name"]);
        } else {
            $arr = array("success" => 0);
        }
        return response()->json($arr, 200, ['Content-Type:text/json;charset=UTF-8']);
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
        DB::connection()->getPdo()->beginTransaction();
        try {
            $teachers = Teacher::find($id);
            $resId = $teachers->photo;
            $teachers->delete();
            UploadedRes::destroy($resId);
            DB::connection()->getPdo()->commit();
            return response()->json(array("ok" => 1), 200, ['Content-Type:text/json;charset=UTF-8']);
        } catch (\PDOException $e) {
            DB::connection()->getPdo()->rollback();
            return response()->json(array("ok" => 0), 500, ['Content-Type:text/json;charset=UTF-8']);
        }
    }
}
