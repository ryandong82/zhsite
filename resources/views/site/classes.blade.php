@extends('site.layouts.sublevel')

@section('title', '课程简介')
@section('titlelink', URL::route('site.classes'))
@section('article')
    <style>
        .items {
            font-family: "Microsoft YaHei", "微软雅黑", "SimSun", "宋体";
            font-size: 16px;
            margin: 5px 0px;
        }
    </style>
    <h1 class="text-center h2">中和商学院课程体系</h1>
    <!-- 时间 -->
    <p class="small text-muted text-center article_time">
        <small></small>
    </p>
    <div class="row">
        <article>
            <div id="editor">
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">中和论坛</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">汇聚全球华人领域最受企业管理者欢迎的专家学者、著名企业家及国家相关政策参与和解读的专家,从宏观经济、企业战略、领导管理、投资融资、人文视野等领域，纵论领先之道，共同传承管理精髓，引领商界创新。&nbsp;</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">企业定制公开课</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">我们可根据企业具体需求提供针对性的公开课服务，企业需提供一定学员基数，由中和商学院负责课程的组织和服务，届时我们会邀请其它会员企业管理者一起参加学习，收费方式按会员价格计算，最大限度的降低企业的成本。&nbsp;</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">企业内训</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">定位：针对企业具体的需求提供特定的培训方案。</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">方式：课前调研（访谈、问卷调查），根据调研结果和客户一起选择师资并确定课程内容，然后实施培训、评测、在岗辅导。</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">企业游学</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">目前我们主要推出了到华为、阿里巴巴、</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">小米公司</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">等企业参观访问，并安排参观企业的高管与学员交流分享经验，费用按人次计算。</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">国学游学</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">	</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">我们和明伦书院进行战略合作，推出了</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">丝绸之路、玄奘之路、蜀道、长征路、孔孟祭祀、周易文化等线路</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">的游学项目，费用按人次计算。</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">课程形式</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:24.1000pt; line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">每年滚动推出，每月两到三次课程，每月周末（周五、六或周六、日）开课，企业持学习卡为凭证听课，学习卡两年有效。</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>                

            </div>
        </article>
    </div>
@stop