@extends('site.layouts.sublevel')

@section('title', $article->category()->getResults()["category_name"])
@section('subtitle', $article['title'])
@section('titlelink', "#")
@section('article')
    <article>
        <div class="article_content">
            {{$article["content"]}}
        </div>
    </article>
@stop