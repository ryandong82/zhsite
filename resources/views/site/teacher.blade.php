@extends('site.layouts.sublevel')

@section('title', '中和师资')
@section('titlelink', URL::route('site.teachers'))
@section('article')
    <div class="teacher_title">
        <ul class="media-list">
            <li class="media">
                <a class="pull-left" href="javascript:void(0);">
                    <img class="media-object img-rounded"
                         src="statics/images/upload/{{$teacher->pic()->getResults()['filename']}}" alt="{{$teacher['name']}}" height="250">
                </a>

                <div class="media-body">
                    <h1 class="h2">{{$teacher['name']}}</h1>
                    <ul>
                        <li>{{$teacher['descript']}}</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- 头 end -->
    <!-- 内容 -->
    <article>
        <div class="article_content"><span style="font-size: 14px; font-family: 微软雅黑">&nbsp;&nbsp;</span><strong
                    style="font-size: 14px; font-family: 微软雅黑, 'Microsoft YaHei'; color: rgb(255,255,255); background-color: rgb(253,253,253)"><span
                        style="padding-bottom: 3px; padding-top: 3px; padding-left: 8px; padding-right: 8px; background-color: rgb(79,129,189)">个人简介</span></strong>
            <hr/>
<span style="font-family: 微软雅黑"><span style="font-size: 14px">{{$teacher['content']}}<br/>
&nbsp;</span></span>


            <br/>
    </article>
@stop