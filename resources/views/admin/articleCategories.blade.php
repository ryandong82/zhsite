@extends('admin.layouts.master')

@section('title', '栏目管理')

@section('styles')
    @parent
@stop

@section("mainbody")

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th width="60%">
                    标题
                </th>
                <th width="20%">
                    标识
                </th>
                <th width="20%">操作</th>
            </tr>
            @foreach($articlesCategories as $articlesCategory)
                <tr id="article_{{$articlesCategory['id']}}">
                    <td>
                        {{$articlesCategory["category_name"]}}
                    </td>
                    <td>
                        {{$articlesCategory["id"]}}
                    </td>
                    <td>
                        <a href="#" data-id="{{$article['id']}}" data-clickurl="{{URL::route('articleCategories.destroy', $articlesCategory['id'])}}" class="delbtn">删除</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <script type="text/javascript" src="./statics/plugin/jquery-2.1.3.min.js"></script>
    <script>
        function removeTblLine(articleId){
            $("article_" + articleId).remove();

        }
        $(document).ready(function () {
            $(".delbtn").unbind("click");
            $(".delbtn").click(
                    function (event) {
                        event.preventDefault();
                        btn = $(this);
                        btnclickurl = $(this).data("clickurl");
                        articleId=$(this).data("id");
                        if (confirm("确定要删除吗？"))
                        {
                            $.ajax({
                                url: btnclickurl,
                                type: "DELETE",
                                data: {
                                    _token: "{{csrf_token()}}"
                                },
                                success: function (_data) {
                                    btn.parent().parent().remove();
                                    alert("删除成功");
                                },
                                error: function (_data) {
                                    alert("操作失败！");
                                }

                            });
                        }
                    }
            );
        });
    </script>
@stop