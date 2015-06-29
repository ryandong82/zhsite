<!DOCTYPE html>
<html>
<head>
    <title>
        中和商学院 - @yield('title')
    </title>
    <meta name="Keywords"
          content="博雅总裁商学院,博雅总裁俱乐部,博雅私人董事会,博雅投资家高端项目,博雅聚娴女性学堂,博雅后EMBA高端项目,博雅国学智慧总裁精修班,博雅人,北大博雅总裁班，博雅资源汇">
    <meta name="Description"
          content="博雅总裁商学院成立于2008年，从诞生起就继承了百年学府北京大学的优秀基因，经过六年的磨砺，博雅总裁商学院已经发展成为有完善课程体系、成熟运营团队的一流商学院。是目前国内最富盛名、最具远见的企业家商学院之一。 博雅总裁商学院设立博雅总裁俱乐部，采取线上线下结合的形式，志在搭建最优质的学习平台，最有影响力的商脉平台，最有效的投融资平台。">
    <link rel="shortcut icon" href="./statics/images/boya/logo.ico">
    <meta http-equiv="Content-Language" content="zh-cn">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="./statics/plugin/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./statics/css/boya/layout.css">
    <script type="text/javascript" src="./statics/plugin/jquery-2.1.3.min.js"></script>
    <script src="./statics/plugin/jquery.lazyload.min.js"></script>
    <script src="./statics/plugin/Bootstrap/js/bootstrap.min.js"></script>
    <script src="./statics/js/boya/home.js"></script>
    <!--[if lt IE 9]>
    <script src="./statics/plugin/html5shiv.min.js"></script>
    <script src="./statics/plugin/respond.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="./statics/css/boya/ie8.css">
    <![endif]-->
    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="./statics/plugin/Bootstrap/css/bootstrap-ie6.min.css">
    <link rel="stylesheet" type="text/css" href="./statics/plugin/Bootstrap/css/ie.css">

    <![endif]-->
    <script>
        $(document).ready(function () {
            $("img.lazy").lazyload({threshold: 50});
        });
    </script>
</head>
<body>
<!-- 顶部 start-->
<!-- 顶部 start-->
<!--header>
    <div class="header">
        <div class="container">
            <a href="http://www.boyaceo.com/about-39.html" class="pull-left text-muted btn">证书验证</a>
            <a href="http://r.boyaceo.com" class="pull-left text-muted btn">报备系统</a>
            <form action="http://www.boyaceo.com/index.php" method="get" class="form-horizontal header header_search text-right" role="search" target="_blank" >
                <button type="submit" class="btn btn-info btn-sm pull-right" style="margin-left:5px;">
                    <span class='glyphicon glyphicon-search'></span>
                </button>
                <div class="form-group col-md-2 col-xs-11 pull-right">
                    <input type="hidden" name="m" value="search"/>
                    <input type="hidden" name="c" value="index"/>
                    <input type="hidden" name="a" value="init"/>
                    <input type="hidden" name="typeid" value="58"/>
                    <input type="hidden" name="siteid" value="1" >
                    <input type="text" class="form-control"  name="q" placeholder="请输入关键字" x-webkit-speech>
                </div>
            </form>
        </div>
    </div>
</header-->
<!-- 顶部 end-->
<!-- 导航 start-->
<nav>
    <div class="navbar" role="navigation" id="index_top">
        <div class="container">
            <div class="clearfix"></div>
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.html">
                    <img src="./statics/images/boya/boya_logo.png" class="img-responsive visible-lg"><img
                            src="./statics/images/boya/sm-logo.jpg" class="img-responsive hidden-lg"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="glyphicon glyphicon-list"></span>
                </button>
            </div>
            <div class="navbar-right" style="margin:0;">

                <div class="clearfix">
                    <img src="./statics/images/boya/boya_06.jpg" class="pull-right wechat_button">
                    <img src="./statics/images/boya/weixin_img.png" class='wechat_img'>
                    <script type="text/javascript">
                        $('.wechat_button,.wechat_img').hover(function () {
                            $('.wechat_img').show();
                        }, function () {
                            $('.wechat_img').hide();
                        })
                    </script>
                    <p class="pull-right text-warning">
                        <span class="h5" style="font-size:13px;">为企业及领导者的发展提供最佳学习平台</span>
                        <!-- <span class="text-primary h4">4000－858－602</span> -->
                    </p>
                </div>
                <ul class="navbar-nav collapse navbar-collapse" id="navbar-collapse-1">
                    <li>
                        <a href="../" class='color'>首页</a>
                    </li>
                    <li>
                        <a href="about" class='color'>学院介绍</a>
                    </li>
                    <li>
                        <a href="./courses-10-1.html" class='color'>课程介绍</a>
                    </li>
                    <li>
                        <a href="teacherpage" class='color'>师资介绍</a>
                    </li>
                    <li>
                        <a href="./about-44.html" class='color'>合作客户</a>
                    </li>
                    <li>
                        <a href="contact" class='color'>联系我们</a>
                    </li>
                    <!-- <li><a href="javascript:void(0);" class="fuzzy99 hidden-xs" target="_self">联系我们</a></li> -->
                    <!-- <li><a href="javascript:void(0);" onclick="boya_application()" target="_self">报名</a></li> -->

                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- 导航 end-->
<!-- 导航 end-->
<base target="_blank"/>
<style>
    /*首页隐藏talk99*/
    #doyoo_panel, .dots, #doyoo_monitor {
        visibility: hidden !important;
    }

    #unslider .dots {
        visibility: visible !important;
    }
</style>
<!-- 轮播图 start-->

@section('mainbody')

@show
<!-- 主体 end -->

<!-- 页脚 　start-->

<footer>
    <div class='container text-center text-muted'>
        <p><a href="about">关于我们</a>&nbsp;｜&nbsp;<a
                    href="contact">联系我们</a>&nbsp;｜&nbsp;<a
                    href="http://www.boyaceo.com/list-32-1.html">友情链接</a>&nbsp;｜&nbsp;<a
                    href="http://wpa.qq.com/msgrd?V=1&uin=2355899908">意见反馈</a>&nbsp;｜&nbsp;<a href="">网站地图</a></p>

        <p>联系电话：<span class="text-primary h4">400－876－1791</span></p>

        <p>Copyright@2009-2014 boyaceo.com All RightReserved [京ICP备10037530号－１]</p>
    </div>
</footer>
<!-- 页脚 　end-->
<!-- 在线申请 -->
<!-- Modal -->
<!-- 返回顶部 -->

<script type="text/javascript" src="./statics/plugin/Bootstrap/js/bootstrap.min.js?version=3.3.2"></script>
<script type="text/javascript" src="./statics/plugin/jquery.lazyload.min.js?version=1.9.1"></script>
<script type="text/javascript" src="./statics/js/boya/home.js"></script>
<!-- 百度统计 -->
<!--div style="visibility:hidden;"><script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb24ef883c2319a400b1e1326a3d33522' type='text/javascript'%3E%3C/script%3E"));
</script>
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F60957f7a7babf0747e33819add6c8cc6' type='text/javascript'%3E%3C/script%3E"));
    </script>

</div-->

</body>
</html>