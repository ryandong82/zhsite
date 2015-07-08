@extends('site.layouts.master')

{{--@section('title', '关于我们')--}}
@section('mainbody')
    <!-- 导航下色条 start-->
    <div class="nav_child_bg">
        <div class="container">
            <div class="container-child">
                <!-- 所属栏目 -->
                <h2 class="h2">
                    @yield('title')<span class="caret"></span>
                </h2>
            </div>
        </div>
    </div>
    <!-- 导航下色条 end-->

    <!-- 主体部分 start-->
    <div id="child_main" class="container">
        <div class="container-child">
            <div class="row">
                <!-- 主体左边 start-->
                <div class="col-sm-7 col-md-8  col-lg-9 col-xs-12">
                    <!-- 面包屑导航 -->
                    <ol class="breadcrumb">
                        <li>
                            <a href="index">首页</a>
                        </li>
                        <li class="active"><a href="@yield('titlelink')">@yield('title')</a> &gt;</li>
                    </ol>
                    <!-- 标题 -->
                    <h3 class="title">@yield('title')</h3>
                    <!-- 新闻列表 start-->
                    @section("articleList")

                    @show
                    <!-- 分享 start -->
                    <div class="bdsharebuttonbox pull-right">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                    </div>
                    <!-- 分享 end -->
                    <!-- 相关阅读 start-->
                    <div class="relation_news">
                        <h3 class="title">相关阅读</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-67-1.html" class="default">聚娴女性一班学员何东艳推荐《论中国》</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-60-1.html" class="default">博雅名师黄菡教授推荐《幸福从心开始》</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-59-1.html" class="default">聚娴女性一班学员何东艳、工商十四班学员敖兰其其格联合推荐《影响力》</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-57-1.html" class="default">商学院院长助理张老师推荐《平台战略》</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-56-1.html"
                                   class="default">商学院方略/PE项目组班主任许老师推荐《向前一步》</a>
                            </li>
                            <li class="list-group-item">
                                <a href="http://www.boyaceo.com/new-13-14-1.html"
                                   class="default">商学院运营总监曹老师推荐《壹玖壹壹：从鸦片战争到军阀混战的百年影像史》</a>
                            </li>
                        </ul>
                    </div>
                    <!-- 相关阅读 end-->
                </div>
                <!-- 主体左边 end-->
                <!-- 主体右边 start-->
                @include('site.layouts.rightpane')
                <!-- 主体右边 end-->
            </div>
            <!-- row<tag>end -->
        </div>
        <!-- container-child<tag>end -->
    </div>
    <!-- 主体部分 end-->
    <div class="container">
        <div class="container-child">
            <!-- 课程&分类 start-->
            <!-- 课程&分类 end-->

            <!-- 图片新闻 【无缝滚动】 start-->
            <div style="background:#cf910a;margin-top:25px;padding-left:12px;" class="clearfix">
                <div style="color:#920003;background:#f1f1f1;padding: 0 12px;" class="pull-left">
                    <h4>图片新闻</h4>
                </div>
            </div>
            <div id="notGaps" class='well'>
                <ul>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402034837621.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402034900828.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402035220900.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402035406529.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402035427724.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402035455155.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402040724296.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402040744710.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402040804214.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402040826709.jpg" style="width:250px;height:156px;" class="lazy"></li>
                    <li>
                        <img data-original="http://www.boyaceo.com/uploadfile/2015/0402/20150402040845330.jpg" style="width:250px;height:156px;" class="lazy"></li>
                </ul>
            </div>
            <script src="/statics/plugin//notGaps.js"></script>
            <script>
                $("#notGaps").imgscroll({
                    //图片滚动速度
                    speed: 20,
                    //图片滚动过渡时间
                    amount: 0,
                    //图片滚动步数
                    width: 1,
                    // "left" 或 "up" 向左或向上滚动
                    dir: "left"
                })
            </script>
            <!-- 图片新闻【无缝滚动】  end-->
        </div>
    </div>
@stop