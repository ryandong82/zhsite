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
                        <li class="active"><a href="about">学院介绍</a> ></li>
                    </ol>
                    <!-- 标题 -->
                    <h1 class="text-center h3">学院介绍</h1>
                    <!-- 时间 -->
                    <p class="small text-muted text-center article_time">
                        <small></small>
                    </p>
                    <!-- 内容 -->
                    <article>
                        <div class="article_content">
                            <div align="center"><img alt="" src="./statics/images/boya/boya_logo.png"/>&nbsp; &nbsp;
                                &nbsp;
                                &nbsp;<br/>
                                &nbsp;</div>
                            <p style="text-indent: 1cm">
                                党的十八大以来“改革”已经成为政府、企业主导方向，企业发展也进入新的阶段，面临许多新问题、新挑战，对企业管理者在综合能力、视野、领导力上有更高的要求，来引领企业获得更好更快发展。顺应这一趋势“中和商学院”邀请相关领域最具影响力专家学者为企业领导者传播与企业发展密切相关的形势分析、经营新理念和管理新经验，提升领导力；帮助企业领导者应对企业在发展中面临的挑战与机遇。</span>
                            </p>

                            <p style="text-indent: 1cm">
                                “中和商学院”秉承以推动企业发展为己任，汇聚全球华人领域最受企业管理者欢迎的专家学者、著名企业家及国家相关政策参与和解读的专家，从宏观经济、企业战略、领导管理、投资融资、人文视野等领域，纵论领先之道，共同传承管理精髓，引领商界创新。
                                进而驾驭全球化商业挑战，推动企业持续快速成长与发展。
                            </p>

                            <p style="text-indent: 1cm">
                                “中和商学院”以创造客户价值，引领企业变革为导向，组织推出培训项目主要有“中和论坛”和“企业定制”公开课、企业内训、企业游学、国学游学等。“中和商学院”致力于成为中国企业领导者的最佳学习平台，诚挚期待与您携手，共同推进中国企业的健康快速成长。
                            </p>
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
                <!-- 主体右边 start-->
                @include('site.layouts.rightpane')
                <!-- 主体右边 end-->
            </div>
            <!-- row<tag>end -->
        </div>
        <!-- container-child<tag>end -->
    </div>
    <!-- 主体部分 end-->
@stop