@extends('site.layouts.sublevel')

@section('title', '课程简介')
@section('titlelink', URL::route('site.colabor'))
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
            <div id="editor" contenteditable="true">
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
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; ">收费标准</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">“中和论坛”和“企业定制公开课”我们实行以下收费标准：</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:11.0000pt; ">会员收费标准</span><span
                            style="font-family:微软雅黑; font-size:11.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:12.0000pt; ">2.8万：20人/天（1400元/人/天）</span><span
                            style="font-family:微软雅黑; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:12.0000pt; ">4.8万：40人/天（1200元/人/天）</span><span
                            style="font-family:微软雅黑; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:12.0000pt; ">8.8万：80人/天（1100元/人/天）</span><span
                            style="font-family:微软雅黑; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:19.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-size:12.0000pt; ">非会员每人每天：1980元/天，3680元/两天</span><span
                            style="font-family:微软雅黑; font-size:12.0000pt; "></span>
                </p>
                <p class="MsoNormal" style="line-height:20.0000pt; mso-line-height-rule:exactly; "><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; ">注：</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="text-indent:15.0000pt; mso-char-indent-count:1.5000; line-height:20.0000pt; mso-line-height-rule:exactly; ">
                    <span style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; ">1)中和商学院企业学习卡，每次可多人参加，每人每听一天按一人次计算，有效期为两年。</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; "></span>
                </p>
                <p class="MsoNormal"
                   style="margin-left:25.1000pt; mso-para-margin-left:1.4400gd; text-indent:-10.0000pt; mso-char-indent-count:-1.0000; line-height:20.0000pt; mso-line-height-rule:exactly; ">
                    <span style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; ">2)以上费用均含培训所需资料费及早餐、午餐和停车费用，每次开课前贵单位需提供参会学员名单，最终结算以学员签到记录为准。内训及国学游学视项目具体情况而定。</span><span
                            style="font-family:微软雅黑; font-weight:bold; font-size:10.0000pt; "></span>
                </p>

            </div>
        </article>
    </div>
@stop