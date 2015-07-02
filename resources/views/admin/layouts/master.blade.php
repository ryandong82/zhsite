<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理 - @yield("title")</title>
    <base href="/">

    @section("styles")
        <link rel="stylesheet" href="statics/plugin/Bootstrap/css/bootstrap.min.css">
    @show

    <style>
        /*body{background-color:midnightblue;}*/

        .main_navigation {
            text-align: center;
            border-top: 1px solid #1b1b1b;
            border-bottom: 2px solid #e1e1e1;
            margin-bottom: 35px;

        }

        .main_navigation .menu {
            padding: 0px;
            margin: 0px;
        }

        #nav_main.main_navigation .menu li {
            list-style: none;
            display: inline-block;
            position: relative;
        }

        #nav_main.main_navigation .menu li a {
            color: #505050;
            line-height: 3em;
            display: block;
            padding: 0px 21px;
        }

        #nav_main.main_navigation .menu li.nav-active {
            border-bottom: 2px solid #e67e22;
            margin-bottom: -2px;
        }

    </style>
</head>
<body>
<nav class="main_navigation" role="navigation" id="nav_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="collapse navbar-collapse">
                    <ul class="menu">
                        <li id="li_teacher"><a href="{{URL::route('teachers.index')}}">师资列表</a></li>
                        <li id="li_article" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                                                role="button"
                                                                aria-expanded="false" href="#">主题活动<b
                                        class="caret"></b></a>

                            <ul class="dropdown-menu" role="menu" id="navbody">
                                <li><a href="{{URL::route('articles.create')}}">发布</a></li>
                                <li><a href="{{URL::route('articles.index')}}">全部</a></li>
                            </ul>

                        </li>
                        <li id="li_banner"><a href="#">主页横幅过渡图</a></li>
                        <li id="li_footer"><a href="#">底部滚动图</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</nav>
@section("mainbody")
@show
</body>
@section("scripts")
    <script src="statics/plugin/jquery-2.1.3.min.js"></script>
    <script src="statics/plugin/Bootstrap/js/bootstrap.min.js"></script>
@show

</html>