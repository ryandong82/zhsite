<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper\ImageSplitter;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        //$aa = new ImageSplitter('afaf');
        //header('Content-Type', 'text/html;encode=UTF-8');
//        return ->header('Content-Type', 'text/html;encode=UTF-8')
//            ->withCookie('name', 'value');
        //return view('admin.index')->withCookie('name', 'value');
        //$view = view('admin.index');
        //$response = new \Illuminate\Http\Response($view);

        //return $response->header('Content-Type', 'text/html;charset=UTF-8');
        //return $view;
        return view('admin.index');
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
