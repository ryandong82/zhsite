@extends('site.layouts.master')

@section('title', '首页')
<!-- 轮播图 start-->
@section('mainbody')
<div class="container" id="slider">
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" data-item=0>
                <a href="http://www.boyaceo.com/list-1-1.html"><img
                            data-original="./statics/images/boya/20141114011328270.jpg"
                            src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=1>
                <a href="http://www.boyaceo.com/courses-10-1.html"><img
                            data-original="./statics/images/boya/20141114011423875.jpg"
                            src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=2>
                <a href="http://www.boyaceo.com/teachers-15-1.html"><img
                            data-original="./statics/images/boya/20141114023548320.jpg"
                            src="./statics/images/boya/articlesloading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=3>
                <a href="http://www.boyaceo.com?m=special&specialid=13"><img
                            data-original="./statics/images/boya/20150310103904336.jpg"
                            src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
            <div class="item " data-item=4>
                <a href="http://www.boyaceo.com/show-31-127-1.html"><img
                            data-original="./statics/images/boya/20150310103905654.jpg"
                            src="./statics/images/boya/loading.gif" class="img-responsive lazy center-block"></a>
            </div>
        </div>
        <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script type="text/javascript">
    // 监听动画，完成懒加载动作
    $('.carousel').on('slide.bs.carousel', function (e) {

        var selector = $('.carousel-inner .item');
        // 当前位置
        var old = $('.carousel-inner .item.active').data('item');
        // 滚动方向
        if (e.direction == 'left') {// 向右
            num = old == selector.length - 1 ? 0 : old + 1;
        } else if (e.direction == 'right') {// 向左
            num = old == 0 ? selector.length - 1 : old - 1;
        }
        img = selector.eq(num).find('img');
        img.attr('src', img.data('original'));// 替换
    })
    // 小圆点儿
    $('.carousel-indicators li').click(function () {
        var img = $('.carousel-inner .item').eq($(this).index()).find('img');
        img.attr('src', img.data('original'));
    })
</script>
<!-- 轮播图 end-->

<!-- 主体 start -->
<div class="container" id="index-main">

    <!-- 选项卡按钮 start-->
    <div class="clearfix tab-btn"><i class="bg-boya pull-left">热点</i>
        <ul class="nav nav-pills pull-left h5" role="tablist">
            @foreach($categories as $category)
            <li role="presentation">
                <a href="javascript:void(0);" target="_self">{{$category['category_name']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- 选项卡按钮 end-->

    <!-- 选项卡内容［热点］ start-->

    <div class="tab-list">
        <dl class="row">
            @foreach($articles as $article)
            <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
                <div class='single-tab text-muted'>
                    <span class="caret"></span>
                    <h4>
                        <a href="article_categories.php?cate_id={{$article['category']}}"
                           class="blue">{{$article->category()->getResults()['category_name']}}</a>
                    </h4>

                    <h3 class="h5 title">
                        <a href="show_article.php?article_id={{$article['id']}}">{{$article['title']}}</a>
                    </h3>

                    <div class="text-center">
                        <a href="show_article.php?article_id={{$article['id']}}">
                            <img data-original="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"
                                 class='lazy content-img'></a>
                    </div>
                    <p class='single-tab-content'>

                    </p>

                    <p class="single-tab-bottom">
                        <span class="glyphicon glyphicon-time"></span>
                      </p>
                </div>
            </dd>

            @endforeach
        </dl>
        <!-- 加载更多豆腐块 -->
        <button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="998" data-page="8">
            <span class='text-primary'>更多</span>
        </button>
    </div>
    <!-- 选项卡内容［热点］ end-->
    <!-- 选项卡内容［＋＋］ start-->

    @foreach($categories as $categoriy)
    <div class="tab-list hidden">
        <dl class="row">
            @foreach($categoriy->articles()->getResults() as $article)
            <dd class="col-boya-2 col-sm-4  col-md-3 col-xs-12">
                <div class='single-tab text-muted'>
                    <span class="caret"></span>
                    <h4>
                        <a href="article_categories.php?cate_id={{$categoriy['id']}}"
                           class="blue">{{$categoriy['cate_name']}}</a>
                    </h4>

                    <h3 class="h5 title">
                        <a href="show_article.php?article_id={{$article['id']}}">{{$article['title']}}</a>
                    </h3>

                    <div class="text-center">
                        <a href="show_article.php?article_id={{$article['id']}}">
                            <img
                                    data-original="http://www.boyaceo.com/uploadfile/2015/0204/20150204032221168.jpg"
                                    class='lazy content-img'></a>
                    </div>
                    <p class='single-tab-content'>
                    </p>

                    <p class="single-tab-bottom">
                        <span class="glyphicon glyphicon-time"></span>
                        $arr_article['create_time']</p>
                </div>
            </dd>
            @endforeach
        </dl>
        <!-- 加载更多豆腐块 -->
        <button class='btn btn-block btn-default btn-sm single-tab-add' data-cid="998" data-page="8">
            <span class='text-primary'>更多</span>
        </button>
    </div>
    @endforeach
    <!-- 选项卡内容［＋＋］ end-->
    <script type="text/javascript">

        // 添加豆腐块的边框----start
        $(document).on("mousemove", ".single-tab", function () {
            $(this).addClass('border-boya');
        }).on('mouseout', '.single-tab', function () {
            $(this).removeClass('border-boya');
        })
        // 添加豆腐块的边框----end

        // 活动预告滚动----start
        // ２条信息以上才滚动
        if ($('#index-main .col-boya-2.other ul').first().find('li').length > 2) {
            // 为每一个添加滚动事件
            $('#index-main .col-boya-2.other .panel').each(function () {
                var p = $(this);
                var time = index_activity_slider(p);
                // 运动效果
                function index_activity_slider(selector) {
                    return setInterval(function () {
                        var obj = selector.find('li').first();
                        var clone = obj.clone();
                        obj.animate({'height': 0, 'opacity': 0.4, 'padding': 0}, 800, function () {
                            obj.parent().append(clone);
                            obj.remove();
                        })
                    }, 4000);
                }

                // hover暂停
                $('#index-main .col-boya-2.other .panel').hover(function () {
                    clearInterval(time);
                }, function () {
                    time = index_activity_slider(p);
                })

            })
        }
        // 活动预告滚动----end

        // 选项卡切换----start
        $('.tab-btn i').click(function () {// 点击热点
            $('.tab-btn ul li').removeClass('active');
            $('.tab-list').first().removeClass('hidden').siblings('.tab-list').addClass('hidden');
        })
        $('.tab-btn ul li').click(function () {// 其他栏目
            num = $(this).index() + 1;
            $(this).addClass('active').siblings('li').removeClass('active');
            $('.tab-list').eq(num).removeClass('hidden').siblings('.tab-list').addClass('hidden');
            // 懒加载
            $('.tab-list').eq(num).find('.content-img').each(function (e) {
                $(this).attr('src', $(this).attr('data-src'));
            })
        })
        // 自动切换
        function tab_auto() {
            var i = $('.tab-btn ul li.active').index() + 1;
            ;
            return setInterval(function () {
                num = $('.tab-btn ul li').length;
                i = i > num ? 0 : i;
                // 热点
                if (i == num) {
                    $('.tab-btn i').trigger('click');

                } else {
                    $('.tab-btn ul li').eq(i).trigger('click');
                }
                i++;
                // 初期为自动切换，现改为不自动切换。故数值巨大
            }, 999999999)
        }
        tab_run = tab_auto();
        // 如果页面滚动则清除定时器
        $(window).scroll(function () {
            clearInterval(tab_run);
            tab_run = tab_auto();
        })
        // 选项卡切换----end

        // 异步获取新豆腐块---start
        $('#index-main .tab-list').each(function (e) {
            // 父盒子
            var box = $(this).find('dl');
            $(this).find('.single-tab-add').click(function () {
                btn = $(this);
                cid = btn.attr('data-cid');// 类别
                page = btn.attr('data-page');// limit的起始数字
                // 无数据状态则不异步
                if (page == 'false') return false;

                $.get("index.php?m=boya&c=ajax&a=index", {cid: cid, page: page}, function (data) {
                    if (data.hasOwnProperty('stat') && data.stat == 1) {
                        res = data.res;

                        for (x in res) {
                            // 是否缩略图
                            hidden = res[x].thumb ? '' : ' hidden';
                            // 是否视频
                            content = res[x].flash.indexOf('http') != -1 ? '<div class="btn-tool" title=""  data-toggle="tooltip" data-placement="top" data-original-title="双击视频以全屏" ><embed width="100%" height="198" type="application/x-shockwave-flash" wmode="transparent"quality="high" allowfullscreen="true" allowscriptaccess="never" allownetworking="internal" src="' + res[x].flash + '"></div>' : '<div class="text-center"><a href="' + res[x].url + '"><img src="' + res[x].thumb + '" class="content-img' + hidden + '"></a></div><p class="single-tab-content">' + res[x].description + '</p>';
                            // 组合的html
                            html = '<dd class="col-boya-2 col-sm-4 col-md-3 col-xs-12"><div class="single-tab text-muted"><span class="caret"></span><h4><a href="' + res[x].caturl + '" class="blue">' + res[x].catname + '</a></h4><h3 class="h5 title"><a href="' + res[x].url + '">' + res[x].title + '</a></h3>' + content + '<p class="single-tab-bottom"><span class="glyphicon glyphicon-time"></span> ' + res[x].inputtime + '</p></div></dd>';
                            box.append(html);
                        }
                        btn.attr('data-page', parseInt(page) + 5);

                    } else {// 状态为无数据
                        btn.attr('data-page', 'false').find('span').html('<span class="glyphicon glyphicon-ban-circle"></span> 没有了．．');
                    }

                }, 'json')
            })
        })
        // 异步获取新豆腐块---end
    </script>
</div>
<!-- 主体 end -->
@stop
<!-- 底部导航 start -->
