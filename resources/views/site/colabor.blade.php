@extends('site.layouts.sublevel')

@section('title', '合作客户')
@section('titlelink', URL::route('site.colabor'))
@section('article')
    <style>
        .items{
            font-family: "Microsoft YaHei", "微软雅黑", "SimSun", "宋体";
            font-size: 16px;
            margin: 5px 0px;
        }
    </style>
    <h1 class="text-center h2">中和商学院部分服务过企业</h1>
    <!-- 时间 -->
    <p class="small text-muted text-center article_time">
        <small></small>
    </p>
        <div class="row">
            <article>
                <div class="items col-sm-4">中国五矿集团公司</div>
                <div class="items col-sm-4">中国海洋石油总公司</div>
                <div class="items col-sm-4">中国航天科技集团公司</div>
                <div class="items col-sm-4">中粮集团有限公司</div>
                <div class="items col-sm-4">中国节能环保集团公司</div>
                <div class="items col-sm-4">中国航空油料集团公司</div>
                <div class="items col-sm-4">国家开发投资公司</div>
                <div class="items col-sm-4">中国恒天集团有限公司</div>
                <div class="items col-sm-4">中国普天信息产业集团</div>
                <div class="items col-sm-4">中国钢研科技集团公司</div>
                <div class="items col-sm-4">中国印钞造币总公司</div>
                <div class="items col-sm-4">中国电子信息产业集公司</div>
                <div class="items col-sm-4">中国南车股份有限公司</div>
                <div class="items col-sm-4">首都机场集团公司</div>
                <div class="items col-sm-4">中航重机股份有限公司</div>
                <div class="items col-sm-4">中国移动设计院</div>
                <div class="items col-sm-4">中国三峡研究院</div>
                <div class="items col-sm-4">中国国际航空股份有限公司</div>
                <div class="items col-sm-4">中国北方工业公司</div>
                <div class="items col-sm-4">中国交通建设股份有限公司</div>
                <div class="items col-sm-4">中国长城工业集团有限公司</div>
                <div class="items col-sm-4">中国包装总公司</div>
                <div class="items col-sm-4">中水电海外投资有限公司</div>
                <div class="items col-sm-4">中国航空技术国际工程有限公司</div>
                <div class="items col-sm-4">中国电子科技开发有限公司</div>
                <div class="items col-sm-4">中国国际贸易中心股份有限公司</div>
                <div class="items col-sm-4">中国软件与技术服务股份公司</div>
                <div class="items col-sm-4">国投资本控股有限公司</div>
                <div class="items col-sm-4">国投电力控股股份有限公司</div>
                <div class="items col-sm-4">建研科技股份有限公司</div>
                <div class="items col-sm-4">人保资本投资管理有限公司</div>
                <div class="items col-sm-4">通用技术集团投资管理有限公司</div>
                <div class="items col-sm-4">航天科技财务有限责任公司</div>
                <div class="items col-sm-4">中航投资控股有限公司</div>
                <div class="items col-sm-4">通用技术集团财务有限责任公司</div>
                <div class="items col-sm-4">航天时代置业发展有限公司</div>
                <div class="items col-sm-4">中国投融资担保有限公司</div>
                <div class="items col-sm-4">航天投资控股有限公司</div>
                <div class="items col-sm-4">河北建设投资集团有限责任公司</div>
                <div class="items col-sm-4">北京首都农业集团有限公司</div>
                <div class="items col-sm-4">北京首都开发控股（集团）公司</div>
                <div class="items col-sm-4">中粮集团生物化工事业部</div>
                <div class="items col-sm-4">中国工商银行</div>
                <div class="items col-sm-4">中国银行</div>
                <div class="items col-sm-4">中国进出口银行</div>
                <div class="items col-sm-4">中国建设银行</div>
                <div class="items col-sm-4">中信银行</div>
                <div class="items col-sm-4">平安银行北京分行</div>
                <div class="items col-sm-4">中国民生银行</div>
                <div class="items col-sm-4">华夏银行</div>
                <div class="items col-sm-4">上海银行北京分行</div>
                <div class="items col-sm-4">上海浦发银行</div>
                <div class="items col-sm-4">渤海银行</div>
                <div class="items col-sm-4">江苏银行北京分行</div>
                <div class="items col-sm-4">中国光大银行</div>
                <div class="items col-sm-4">南京银行</div>
                <div class="items col-sm-4">广发银行北京分行</div>
                <div class="items col-sm-4">威海市商业银行</div>
                <div class="items col-sm-4">齐商银行</div>
                <div class="items col-sm-4">张家口市商业银行</div>
                <div class="items col-sm-4">廊坊银行</div>
                <div class="items col-sm-4">抚顺银行</div>
                <div class="items col-sm-4">平安银行南京分行</div>
                <div class="items col-sm-4">中国人寿保险（集团）公司</div>
                <div class="items col-sm-4">中国人民财产保险股份有限公司</div>
                <div class="items col-sm-4">中国太平保险集团有限责任公司</div>
                <div class="items col-sm-4">泰康人寿保险股份有限公司</div>
                <div class="items col-sm-4">中华联合保险控股股份有限公司</div>
                <div class="items col-sm-4">中邮人寿保险股份有限公司</div>
                <div class="items col-sm-4">阳光保险集团股份有限公司</div>
                <div class="items col-sm-4">幸福人寿保险股份有限公司</div>
                <div class="items col-sm-4">信达财产保险股份有限公司</div>
                <div class="items col-sm-4">新光海航人寿保险有限责任公司</div>
                <div class="items col-sm-4">泰康养老保险股份有限公司</div>
                <div class="items col-sm-4">扬子江保险经纪有限公司</div>
                <div class="items col-sm-4">渤海人寿保险股份有限公司</div>
                <div class="items col-sm-4">信诚人寿保险有限公司</div>
                <div class="items col-sm-4">永诚财产保险股份有限公司</div>
                <div class="items col-sm-4">中国长城资产管理公司</div>
                <div class="items col-sm-4">中国东方资产管理公司</div>
                <div class="items col-sm-4">中国华融资产管理公司</div>
                <div class="items col-sm-4">泰康资产管理有限公司</div>
                <div class="items col-sm-4">南方工业资产管理有限责任公司</div>
                <div class="items col-sm-4">光大永明资产管理股份有限公司</div>
                <div class="items col-sm-4">东兴证券股份有限公司</div>
                <div class="items col-sm-4">招商证券股份有限公司</div>
                <div class="items col-sm-4">中国民族证券有限责任公司</div>
                <div class="items col-sm-4">国信证券股份有限公司</div>
                <div class="items col-sm-4">财达证券有限责任公司</div>
                <div class="items col-sm-4">中国银河证券股份有限公司</div>
                <div class="items col-sm-4">日信证券有限责任公司</div>
                <div class="items col-sm-4">信达证券股份有限公司</div>
                <div class="items col-sm-4">新时代证券有限责任公司</div>
                <div class="items col-sm-4">北京中海投资管理公司</div>
                <div class="items col-sm-4">海航资本集团有限公司</div>
                <div class="items col-sm-4">海航易生控股有限公司</div>
                <div class="items col-sm-4">中非莱基投资有限公司</div>
                <div class="items col-sm-4">海航财务集团有限公司</div>
                <div class="items col-sm-4">海航云商控股有限公司</div>
                <div class="items col-sm-4">中非发展基金有限公司</div>
                <div class="items col-sm-4">北京电子城投资开发公司</div>
                <div class="items col-sm-4">信达金融租赁有限公司</div>
                <div class="items col-sm-4">英大期货有限公司</div>
                <div class="items col-sm-4">渤海国际信托有限公司</div>
                <div class="items col-sm-4">光大期货有限公司</div>
                <div class="items col-sm-4">昆仑信托有限责任公司</div>
                <div class="items col-sm-4">国投泰康信托有限公司</div>
                <div class="items col-sm-4">中国金谷国际信托有限责任公司</div>
                <div class="items col-sm-4">信达地产股份有限公司</div>
                <div class="items col-sm-4">首创置业股份有限公司</div>
                <div class="items col-sm-4">当代节能置业股份有限公司</div>
                <div class="items col-sm-4">万悦置业有限公司</div>
                <div class="items col-sm-4">泛华建设集团有限公司</div>
                <div class="items col-sm-4">海航置业控股(集团)有限公司</div>
                <div class="items col-sm-4">中兴智能交通有限公司</div>
                <div class="items col-sm-4">北奔重型汽车集团有限公司</div>
                <div class="items col-sm-4">唐山三友集团有限公司</div>
                <div class="items col-sm-4">东方口岸科技有限公司</div>
                <div class="items col-sm-4">海航旅游集团有限公司</div>
                <div class="items col-sm-4">北京安控科技股份有限公司</div>
                <div class="items col-sm-4">西部航空有限责任公司</div>
                <div class="items col-sm-4">北京光线传媒股份有限公司</div>
                <div class="items col-sm-4">上海华虹集成电路有限责任公司</div>
                <div class="items col-sm-4">呷哺呷哺餐饮管理有限公司</div>
                <div class="items col-sm-4">北京市西单麻辣诱惑餐饮公司</div>
                <div class="items col-sm-4">北京华冠商业经营股份有限公司</div>
                <div class="items col-sm-4">北京信威通信技术股份有限公司</div>
                <div class="items col-sm-4">烟台万润精细化工股份有限公司</div>
                <div class="items col-sm-4">宝健（中国）日用品有限公司</div>
                <div class="items col-sm-4">中国五矿集团公司</div>
                <div class="items col-sm-4">中国海洋石油总公司</div>
                <div class="items col-sm-4">中国航天科技集团公司</div>
                <div class="items col-sm-4">中粮集团有限公司</div>
                <div class="items col-sm-4">中国节能环保集团公司</div>
                <div class="items col-sm-4">中国航空油料集团公司</div>
                <div class="items col-sm-4">国家开发投资公司</div>
                <div class="items col-sm-4">中国恒天集团有限公司</div>
                <div class="items col-sm-4">中国普天信息产业集团</div>
                <div class="items col-sm-4">中国钢研科技集团公司</div>
                <div class="items col-sm-4">中国印钞造币总公司</div>
                <div class="items col-sm-4">中国电子信息产业集公司</div>
                <div class="items col-sm-4">中国南车股份有限公司</div>
                <div class="items col-sm-4">首都机场集团公司</div>
                <div class="items col-sm-4">中航重机股份有限公司</div>
            </article>
        </div>
@stop