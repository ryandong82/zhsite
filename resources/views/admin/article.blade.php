@extends('admin.layouts.master')

@section('title', '文章')

@section('styles')
    @parent
@stop

@section("mainbody")

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th width="70%">
                    标题
                </th>
                <th width="20%">
                    创建时间
                </th>
                <th width="10%">
                    分组
                </th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>
                        {{$article["title"]}}
                    </td>
                    <td>
                        {{$article["created_at"]}}
                    </td>
                    <td>
                        {{$article->category()->getResults()["category_name"]}}
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@stop