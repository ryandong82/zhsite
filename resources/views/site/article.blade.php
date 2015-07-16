@extends('site.layouts.sublevel')

@section('title', $article->category()->getResults()["category_name"])
@section('subtitle', $article['title'])
@section('titlelink', URL::route("site.category", array('articleId'=>$article->category()->getResults()['id'], 'pageNo'=>1)))
@section('article')
    <article>
        <div class="article_content">
            <?php echo $article["content"]?>
        </div>
    </article>
@stop