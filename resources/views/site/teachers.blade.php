@extends('site.layouts.master')

@section('title', '中和师资')

@section('mainbody')
    <!-- 导航下色条 start-->
    <div class="nav_child_bg">
        <div class="container">
            <div class="container-child">
                <h1 class="h2">
                    中和师资
                    <span class="caret"></span>
                </h1>
            </div>
        </div>
    </div>
    <!-- 导航下色条 end-->

    <!-- 主体部分 start-->
    <div id="child_main" class="container">
        <div class="container-child">
            <div class="row">
                <!-- 主体 start-->
                <div class="col-xs-12">
                    <!-- 面包屑导航 -->
                    <ol class="breadcrumb">
                        <li>
                            <a href="./">首页</a>
                        </li>
                        <li class="active">
                            <a href="{{URL::route("site.teachers")}}">师资</a> &gt;</li>
                    </ol>
                    <h3 class="title">中和师资</h3>
                    <!-- 新闻列表 start-->
                    <div class="teacher_list">
                        <hr>
                        <!-- 切换页 -->
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li class="active"><a href="#all" role="tab" data-toggle="tab">全部师资</a></li>
                            @foreach($groups as $group)
                                <li><a href="#group-{{$group['id']}}" role="tab"
                                       data-toggle="tab">{{$group['name']}}</a></li>
                            @endforeach
                        </ul>


                        <!-- 切换页内容 -->
                        <div class="tab-content panel-body">
                            <!-- 全部师资 start-->
                            <div class="tab-pane fade active in" id="all">
                                @foreach($all_teachers as $teacher)
                                <div class="col-sm-12 col-md-6 col-lg-4 teacher-single clearfix">
                                    <a href="{{URL::route("site.teacher", $teacher['id'])}}" class="thumbnail col-xs-5"> <img
                                                class='lazy'
                                                src="statics/images/boya/t-face.jpg"
                                                data-original="statics/images/upload/{{$teacher->pic()->getResults()['filename']}}"
                                                width="115" height="165"
                                                style='height:164px;'></a>

                                    <div class="col-xs-7">
                                        <h3 class="h4"><a href="{{URL::route("site.teacher", $teacher['id'])}}"
                                                          class="blue">{{$teacher['name']}}</a></h3>

                                        <p class="text-muted">{{$teacher['descript']}}</p>
                                    </div>
                                    <a href="{{URL::route("site.teacher", $teacher['id'])}}"
                                       class="btn btn-default btn-xs"> <span
                                                class="glyphicon glyphicon-user text-warning"></span> <span
                                                class="text-warning">个人主页</span></a>
                                </div>
                                @endforeach
                                <!-- 分页 -->
                                <ul class="pager">
                                    <li class="default">
                                        <a class="a1">{{$cnt}}条</a>
                                        <a href="teachers.php?page=" class="a1">上一页</a>
                                        <a href="teachers.php?page='">1</a>
                                        <a href="teachers.php?page=" class="a1">下一页</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- 全部师资 end -->
                            <!-- 师资［＋＋］ start-->
                            @foreach($groups as $group)
                            <div class="tab-pane fade" id="group-{{$group['id']}}">
                                @foreach($group->teachers()->getResults() as $teacher)
                                <div class="col-sm-12 col-md-6 col-lg-4 teacher-single clearfix">
                                    <a href="{{URL::route("site.teacher", $teacher['id'])}}"
                                       class="thumbnail col-xs-5"> <img class="lazy"
                                                                        src="statics/images/boya/t-face.jpg"
                                                                        data-original="statics/images/upload/{{$teacher->pic()->getResults()['filename']}}"
                                                                        width="115"
                                                                        height="165"
                                                                        style="height:164px;"></a>

                                    <div class="col-xs-7">
                                        <h3 class="h4"><a href="{{URL::route("site.teacher", $teacher['id'])}}"
                                                          class="blue">{{$teacher['name']}}</a>
                                        </h3>

                                        <p class="text-muted">{{$teacher['descript']}}</p>
                                    </div>
                                    <a href="{{URL::route("site.teacher", $teacher['id'])}}"
                                       class="btn btn-default btn-xs"> <span
                                                class="glyphicon glyphicon-user text-warning"></span> <span
                                                class="text-warning">个人主页</span></a>
                                </div>
                                @endforeach

                            </div>
                            @endforeach
                            <!-- 师资［＋＋］ end-->
                        </div>
                    </div>
                    <!-- 新闻列表 end-->

                </div>
                <!-- 主体左边 end-->

            </div>
            <!-- row<tag>end --></div>
        <!-- container-child<tag>end --></div>
    <!-- 主体部分 end-->

@stop