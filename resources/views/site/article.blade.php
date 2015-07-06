{{$article}}

@extends('site.layouts.sublevel')

@section('title', $article['title'])
@section('subtitle', $article)
@section('titlelink', 'contact')
@section('article')
    <article>
        <div class="article_content">
            {{$article["content"]}}
        </div>
    </article>
@stop