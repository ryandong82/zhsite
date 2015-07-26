<div class="col-sm-5 col-md-4 col-lg-3 hidden-xs">
    <div class="pinned-mark">
        <!-- 热线&课程 start-->
        <div style="background:#b91d21;color:white;padding:5px 35px;margin-bottom:15px;"
             class="text-center">
            <h5>
                <span class="glyphicon glyphicon-phone-alt pull-left" style="font-size:40px;"></span>
            </h5>
            <h4>官方报名热线</h4>
            <h5>010-58406365</h5>
        </div>
        <!--<div class="sidebar course">
            <h5 style="background:#b91d21;padding:8px 35px 8px 15px;color:white;"
                class="clearfix text-center">
                <span class="glyphicon glyphicon-education pull-left" style="font-size:18px;"></span>
                中和商学院招生简章分类
            </h5>

            <div class="sidebar-right">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="http://boyaceo.com?m=special&specialid=13" class="default">博雅创业家训练营</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_pe.php" class="default">博雅实战PE与资本运营董事长精品班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_emba.php" class="default">博雅经营方略（EMBA）总裁精品班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_learned.php" class="default">博雅书院国学管理课堂</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_finish.php" class="default">博雅国学智慧总裁精修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-4-1.html" class="default">博雅聚娴女性学堂</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_private.php"
                           class="default">博雅私人董事会</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/promotion/show_icbc.php"
                           class="default">博雅工商管理精品班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-5-1.html"
                           class="default">博雅投资家高端项目</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-3-1.html"
                           class="default">博雅后EMBA高端项目</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-8-1.html" class="default">博雅海外CEO课程—新加坡南洋理工大学</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-15-1.html"
                           class="default">博雅财务总监高级研修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-16-1.html"
                           class="default">博雅营销总监高级研修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/course-10-17-1.html" class="default">2015博雅青少年国学经典领袖营</a>
                    </li>
                </ul>
                <img src="http://www.boyaceo.com/statics/images/boya/child_arrow.jpg"
                     class="child_arrow">
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a class="btn btn-warning center-block" data-toggle="modal"
                       data-target="#application">开始申请</a>
                </div>
                <div class="col-xs-6">
                    <a class="btn btn-warning center-block">报名表下载</a>
                </div>
            </div>
        </div>-->
        <!-- 热线&课程 end-->

        <!-- 名师介绍 start-->
        <div class="sidebar teacher">
            <h5>
                <span class="bg-boya">名师介绍</span>
                <small class="more pull-right">
                    <a href="{{URL::route('site.teachers')}}">more</a>
                </small>
            </h5>
            <div class="sidebar-right">
                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="teacher-single col-xs-6">
                            <a href="{{URL::route("site.teacher", $teacher['id'])}}" class="thumbnail">
                                <img class='lazy' src="statics/images/boya/t-face.jpg"
                                     data-original="statics/images/upload/{{$teacher->pic()->getResults()['filename']}}"
                                     style="width:80px!important;height:115px!important;"></a>

                            <p class='text-center'>
                                <a href="{{URL::route("site.teacher", $teacher['id'])}}" class="blue">
                                    {{$teacher['name']}}
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
                <img src="statics/images/boya/child_arrow.jpg" class="child_arrow"></div>
        </div>
        <!-- 名师介绍 end-->

        <!-- 其他栏目 start-->
        <div class="sidebar">
            <h5 style="margin-bottom:15px;">
                <span class="bg-boya">其他栏目</span>
            </h5>

            <div class="list-group">
                @foreach($categories_in_pane as $category)
                    <a href="{{URL::route('site.category', array('categoryId'=>$category["id"], 'pageNo'=>1))}}"
                       class="list-group-item list-group-item btn-tool"
                       data-toggle="tooltip" data-placement="left" title=""
                       data-original-title="{{$category['name']}}">{{$category['category_name']}}<span
                                class="glyphicon glyphicon-send pull-right"></span>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- 其他栏目 end-->

        <!-- 媒体新闻 start-->
        @for($i=0;$i<min(count($categories_in_pane), 2);$i++)
            {{--@foreach($categories_in_pane->orderBy('ord_no')->take(2)->get() as $category)--}}
            <?php
            $category = $categories_in_pane[$i]
            ?>
            <div class="sidebar">
                <h5>
                    <span class="bg-boya">{{$category["category_name"]}}</span>
                    <small class="more pull-right">
                        <a href="{{URL::route('site.category', $category['id'])}}">more</a>
                    </small>
                </h5>
                <div class="panel sidebar-right media-news">
                    <ul class="list-group">
                        @foreach($category->articles()->getResults() as $article)
                            <li class="list-group-item">
                                <small class="text-primary">
                                    [
                                    {{date('Y-m-d', strtotime($article['created_at']))}} ]
                                </small>
                                <a href="{{URL::route('site.article', $article['id'])}}">{{$article['title']}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <img src="statics/images/boya/child_arrow.jpg"
                         class="child_arrow">
                </div>
            </div>
        @endfor
    </div>
    <!-- 快速报名 start-->
    <script type="text/javascript" src='./statics/plugin/jquery.pin.js'></script>
    <script type="text/javascript">
        if ($('#child_main').height() > 1000)
            $('.pinned-box').height($('#child_main').height() - $('.pinned-mark').height() - 80);
        $(".pinned").pin({
            containerSelector: ".pinned-box"
        })
    </script>
    <!-- 快速报名 end-->            </div>
