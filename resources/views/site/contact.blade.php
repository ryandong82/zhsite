@extends('site.layouts.sublevel')

@section('title', '联系我们')
@section('subtitle', '联系我们')
@section('titlelink', 'contact')
@section('article')
    <article>
        <div class="article_content">电话：010-58406365<br/>传真：010-59713190
            <br/>
            地址：北京市海淀区上地十街辉煌国际大厦2006<br/>
            联系人：李老师<br/>
        </div>
        <div id="map_container">
            <iframe src="map_frame.html" style="height:400px;width:100%;">

            </iframe>
        </div>
    </article>
@stop