@extends('site.layouts.master')

@section('title', '关于我们')
@section('mainbody')
    <!-- 导航下色条 start-->
    <div class="nav_child_bg">
        <div class="container">
            <div class="container-child">
                <!-- 所属栏目 -->
                <h2 class="h2">
                    学院介绍 <span class="caret"></span>
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
                        <li class="active"><a href="contact">联系我们</a> ></li>
                    </ol>
                    <!-- 标题 -->
                    <h1 class="text-center h3">联系我们</h1>
                    <!-- 时间 -->
                    <p class="small text-muted text-center article_time">
                        <small></small>
                    </p>
                    <!-- 内容 -->
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

                    <!-- 分享 start -->
                    <div class="bdsharebuttonbox pull-right">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                    </div>
                    <script>window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "1",
                                "bdSize": "16"
                            },
                            "share": {},
                            "image": {
                                "viewList": ["qzone", "tsina", "weixin", "sqq", "youdao"],
                                "viewText": "分享到：",
                                "viewSize": "16"
                            },
                            "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["qzone", "tsina", "weixin", "sqq", "youdao"]
                            }
                        };
                        with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
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
                @include('site.layouts.rightpane')
                <!-- 主体右边 start-->
                <!-- 主体右边 end-->
            </div>
            <!-- row<tag>end -->
        </div>
        <!-- container-child<tag>end -->
    </div>
@stop