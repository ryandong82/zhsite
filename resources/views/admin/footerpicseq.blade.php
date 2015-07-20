@extends('admin.layouts.master')

@section('title', '页脚滚动栏图片')

@section('styles')
    @parent
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
        </div>
    </div>

@stop