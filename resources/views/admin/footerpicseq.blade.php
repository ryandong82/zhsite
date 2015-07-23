@extends('admin.layouts.master')

@section('title', '页脚滚动栏图片')

@section('styles')
    @parent
    <style>
        #newFile {
            display:none;
        }
    </style>
@stop

@section("mainbody")
    <div class="container">
        <div class="row">
            @foreach($footerPics as $footPic)
                <div class="col-sm-2">
                    <div>
                        <img src="{{$footPic->filename()}}">
                    </div>
                    <input type="checkbox" class="selPic">
                </div>
            @endforeach
            <div class="col-sm-2">
                <div>
                    <input type="file" id="newFile" name="newFile"/>
                </div>
                <button id="btnAdd" class="form-control">添加</button>
            </div>
        </div>
    </div>

@stop
@section("scripts")
    @parent
    <script>
        $().ready(
                function () {
                    $("#newFile").change(function () {
                    });
                    $("#btnAdd").click(function () {
                        var mouseobj = document.createEvent("MouseEvents");
                        mouseobj.initEvent("click", true, true);
                        document.getElementById('newFile').dispatchEvent(mouseobj);
                    });
                }
        );
    </script>
@stop