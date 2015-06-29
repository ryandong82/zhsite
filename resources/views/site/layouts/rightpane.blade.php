<div class="col-sm-5 col-md-4 col-lg-3 hidden-xs">
    <div class="pinned-mark">
        <!-- 热线&课程 start-->
        <div style="background:#b91d21;color:white;padding:5px 35px;margin-bottom:15px;"
             class="text-center">
            <h5>
                <span class="glyphicon glyphicon-phone-alt pull-left" style="font-size:40px;"></span>
            </h5>
            <h4>官方报名热线</h4>
            <h4>400-876-1791</h4>
        </div>
        <div class="sidebar course">
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
        </div>
        <!-- 热线&课程 end-->

        <!-- 名师介绍 start-->
        <div class="sidebar teacher">
            <h5>
                <span class="bg-boya">名师介绍</span>
                <small class="more pull-right">
                    <a href="teachers">more</a>
                </small>
            </h5>
            <div class="sidebar-right">
                <div class="row">
                    @foreach($teachers as $teacher)
                    <div class="teacher-single col-xs-6">
                        <a href="./teacher.php?id=$arr_result[id]" class="thumbnail">
                            <img class='lazy' src="./statics/images/boya/t-face.jpg"
                                 data-original="./statics/images/upload/{{$teacher->pic()['file_name']}}"
                                 style="width:80px!important;width:115px!important;"></a>

                        <p class='text-center'>
                            <a href="./teacher.php?id={{$teacher['id']}}" class="blue">
                                {{$teacher['name']}}
                            </a>
                        </p>
                    </div>
                    @endforeach
                </div>
                <img src="./statics/images/boya/child_arrow.jpg" class="child_arrow"></div>
        </div>
        <!-- 名师介绍 end-->

        <!-- 其他栏目 start-->
        <div class="sidebar">
            <h5 style="margin-bottom:15px;">
                <span class="bg-boya">其他栏目</span>
            </h5>

            <div class="list-group">
                <a href="http://www.boyaceo.com/courses-10-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="课程">课程 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/news-11-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="活动">活动 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=lists&catid=12"
                   class="list-group-item list-group-item btn-tool 			" data-toggle="tooltip"
                   data-placement="left"
                   title="" data-original-title="博雅人">博雅人 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/index.php?m=content&c=index&a=lists&catid=23"
                   class="list-group-item list-group-item btn-tool 			" data-toggle="tooltip"
                   data-placement="left"
                   title="" data-original-title="">－博雅人PDF <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/news-24-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="">－博雅人 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/news-13-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="悦读">悦读 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/news-14-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="公益">公益 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/videos-25-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="视线">视线 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/list-40-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="学员心声">学员心声 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
                <a href="http://www.boyaceo.com/list-41-1.html"
                   class="list-group-item list-group-item btn-tool 			"
                   data-toggle="tooltip" data-placement="left" title=""
                   data-original-title="观点案例">观点案例 <span
                            class="glyphicon glyphicon-send pull-right"></span>
                </a>
            </div>
        </div>
        <!-- 其他栏目 end-->

        <!-- 媒体新闻 start-->
        <div class="sidebar">
            <h5>
                <span class="bg-boya">媒体新闻</span>
                <small class="more pull-right">
                    <a href="http://www.boyaceo.com/list-9-1.html">more</a>
                </small>
            </h5>
            <div class="panel sidebar-right media-news">
                <ul class="list-group">
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-03-04 ]
                        </small>
                        <a href="http://boyaceo.com?m=special&specialid=13">博雅创业家训练营</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2014-11-13 ]
                        </small>
                        <a href="http://www.boyaceo.com/promotion/show_pe.php">博雅实战PE与资本运营董事长精品班</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-05-28 ]
                        </small>
                        <a href="http://www.boyaceo.com/new-11-169-1.html">博雅创业大赛第一期“获扶持项目名单”</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-05-28 ]
                        </small>
                        <a href="http://www.boyaceo.com/new-11-168-1.html">梦想创未来 ——博雅创业大赛隆重开赛</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-05-25 ]
                        </small>
                        <a href="http://www.boyaceo.com/new-11-167-1.html">品茶论智慧 读书历人生
                            ——国学精修班5月份课外活动</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-05-13 ]
                        </small>
                        <a href="http://www.boyaceo.com/new-24-166-1.html">私人董事会首席专家教练刘秉君：五月的思考——EMBA之后，企业家在混什么圈子</a>
                    </li>
                    <li class="list-group-item">
                        <small class="text-primary">
                            [
                            2015-03-03 ]
                        </small>
                        <a href="http://www.boyaceo.com/new-14-122-1.html">博雅公益：感谢有你！</a>
                    </li>
                </ul>
                <img src="http://www.boyaceo.com/statics/images/boya/child_arrow.jpg"
                     class="child_arrow">
            </div>
        </div>
        <!-- 媒体新闻 end-->

        <!-- 开课通知 start-->
        <div class="sidebar">
            <h5>
                <span class="bg-boya">课程简章</span>
                <small class="more pull-right">
                    <a href="http://www.boyaceo.com/about-44.html">more</a>
                </small>
            </h5>
            <div class="sidebar-right">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085033523.doc">博雅国学智慧总裁精修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085054690.doc">博雅聚娴女性学堂</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085112112.doc">博雅投资家高端项目</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085126280.doc">博雅私人董事会</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085156143.doc">博雅经营方略（EMBA）总裁精品班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085530919.doc">博雅实战PE与资本运营董事长精品班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085218792.doc">博雅书院国学管理课堂</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085251509.doc">博雅营销总监高级研修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0319/20150319085306102.doc">博雅财务总监高级研修班</a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.boyaceo.com/uploadfile/2015/0422/20150422093412922.doc">20150422093412527</a>
                    </li>
                </ul>
                <img src="http://www.boyaceo.com/statics/images/boya/child_arrow.jpg"
                     class="child_arrow">
            </div>
        </div>
        <!-- 开课通知 end-->
    </div>
    <!-- 快速报名 start-->
    <div class="pinned-box">
        <div class="sidebar pinned">
            <h5>
                <span class="bg-boya">快速报名</span>
            </h5>

            <div class="sidebar-right clearfix">
                <p class="text-muted">
                    <span class="text-danger">*温馨提示</span>
                    <span style="font-size:12px;">博雅总裁商学院郑重承诺；所填信息仅用于招生，绝不外泄。</span>
                </p>

                <div class="col-xs-12">
                    <form action="" method="post"
                          name="myform" id="application-2" class='form-horizontal'>
                        <div class="form-group">
                            <label for="quickname">姓名</label>
                            <input type="text" class="form-control input-sm" id="quickname"
                                   placeholder="Enter name"
                                   name="name"></div>
                        <div class="form-group">
                            <label for="quickmobile">手机</label>
                            <input type="text" class="form-control input-sm" id="quickmobile"
                                   placeholder="Enter mobile"
                                   name="mobile"></div>
                        <div class="form-group">
                            <label for="quickid">身份证</label>
                            <input type="text" class="form-control input-sm" id="exampleInputPassword1"
                                   placeholder="Enter identitycard" name="column1"></div>
                        <div class="form-group">
                            <label for="quickproject">项目</label>
                            <select class="form-control input-sm" name="column0" id="quickproject">
                                <option value="">选择 -项目</option>
                                <option value="创业训练">博雅创业家训练营</option>
                                <option value="实战PE">博雅实战PE与资本运营董事长精品班</option>
                                <option value="经营方略">博雅经营方略（EMBA）总裁精品班</option>
                                <option value="国学管理">博雅书院国学管理课堂</option>
                                <option value="博雅国学智慧">博雅国学智慧总裁精修班</option>
                                <option value="博雅女性学堂">博雅聚娴女性学堂</option>
                                <option value="博雅私董会">博雅私人董事会</option>
                                <option value="">博雅工商管理精品班</option>
                                <option value="博雅投资家">博雅投资家高端项目</option>
                                <option value="博雅高端项目">博雅后EMBA高端项目</option>
                                <option value="新加坡课程">博雅海外CEO课程—新加坡南洋理工大学</option>
                                <option value="财务总监">博雅财务总监高级研修班</option>
                                <option value="营销总监">博雅营销总监高级研修班</option>
                                <option value="">2015博雅青少年国学经典领袖营</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quickmessage">留言</label>
                        <textarea class="form-control input-sm" id="quickmessage" placeholder="Enter message"
                                  name="column2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning center-block">提交</button>
                    </form>
                </div>
                <img src="http://www.boyaceo.com/statics/images/boya/child_arrow.jpg"
                     class="child_arrow">
            </div>
        </div>
    </div>
    <script type="text/javascript" src='./statics/plugin/jquery.pin.js'></script>
    <script type="text/javascript">
        if ($('#child_main').height() > 1000)
            $('.pinned-box').height($('#child_main').height() - $('.pinned-mark').height() - 80);
        $(".pinned").pin({
            containerSelector: ".pinned-box"
        })
    </script>
    <!-- 快速报名 end-->            </div>
