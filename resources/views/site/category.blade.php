@extends('site.layouts.articlesInCategory')

@section('title', $category["category_name"])
@section('titlelink', URL::route("site.category", $category["id"]))
@section("articleList")
    <div class="list-group article_list">
        @foreach($articles as $article)
            <a href="{{URL::route("site.article", $article["id"])}}" class="list-group-item btn-tool" title=""  data-toggle="tooltip" data-placement="top" title="" data-original-title="《论中国》，作者是美国前国务卿基辛格，他将自己对中国的研究和发展做了很好的阐述，并且有很多珍贵的...">
                {{$article["title"]}}							<small class="pull-right">{{$article["created_at"]}}</small>
            </a>
        @endforeach

    </div>
    <!-- 新闻列表 end-->

    <!-- 分页 -->
    <ul class="pager">
        <li class="default">
            <a class="a1">14条</a> <a href="news-13-0.html" class="a1">上一页</a> <span>1</span> <a href="news-13-2.html">2</a> <a href="news-13-2.html" class="a1">下一页</a>						</li>
    </ul>
@stop