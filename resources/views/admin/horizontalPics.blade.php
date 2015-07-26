@extends('admin.layouts.master')

@section('title', '页脚滚动栏图片')

@section('styles')
    @parent
    <style>

        #myFile {
            display: none;
        }

        .item {
        }

        .item div.picBox {
            width: 96%;
            float: left;
            display: inline;
            overflow: hidden;
            height: 280px;
        }

        .item div.cbBox {
            float: left;
            width: 4%;
            display: inline;
            height: 275px;
            padding: 5px;
        }

        .item div.cbBox input {
            width: 100%;
            display: inline;
            height: 100%;
        }

        .item div img {
            width: 100%;
        }

        .btnAdd {
            height: 100%;
            width: 100%;
        }

        #topBar {
            margin-bottom: 20px;
        }

        #content {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }

        .wrapfix:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }

    </style>
@stop

@section("mainbody")
    <div id="content">
        <div id="topBar">
            <button id="btnDel" class="form-control">删除</button>
        </div>
        <div id="pane_for_add">
            <div>
                <form name="frm_upload_file" id="frm_upload_file">
                    <input type="file" id="myFile" name="myFile"/>
                </form>
                <button id="btnAdd" class="form-control btnAdd">添加</button>
            </div>
        </div>
        <div id="all">
            @foreach($horizontalPics as $horizontalPic)
                <div class="item wrapfix" data-id="{{$horizontalPic->id}}">
                    <div class="picBox">
                        <img src="statics/images/upload/{{$horizontalPic->filename}}" class="image">
                    </div>
                    <div class="cbBox">
                        <input type="checkbox" class="selPic" data-id="{{$horizontalPic->id}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop
@section("scripts")
    @parent
    <script src="statics/js/boya/utils.js"></script>
    <script>
        $().ready(
                function () {
                    $("#btnDel").click(function () {
                        //alert($(".selPic").eq(0).prop("checked"));
                        var _data = {
                            picIdList: [],
                            _token: "{{csrf_token()}}"
                        }
                        $('.selPic').each(
                                function (idx, element) {
                                    //alert($(element).data("id"));
                                    if ($(element).prop("checked"))
                                        _data.picIdList.push($(element).data("id"));
                                }
                        );
                        if (_data.picIdList.length > 0 && confirm("删除{0}张图片，是否继续".format(_data.picIdList.length)))
                            $.ajax(
                                    {
                                        url: "{{URL::route('mainHorizontalPics.destroy')}}",
                                        type: "DELETE",
                                        data: _data,
                                        dataType: "json",
//                                    processData: false,  // 告诉jQuery不要去处理发送的数据
//                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                        success: function (data) {
                                            var _selector;
                                            _data.picIdList.forEach(function (ele) {
                                                _selector = String.format('div.item[data-id="{0}"]', ele);
                                                $(_selector).remove();

                                            })

                                        }

                                    });

                    });

                    $("#btnAdd").click(function () {
                        var mouseobj = document.createEvent("MouseEvents");
                        mouseobj.initEvent("click", true, true);
                        document.getElementById('myFile').dispatchEvent(mouseobj);
                    });


                    $("#myFile").change(function () {
                        var _frm_data = new FormData(frm_upload_file);
                        _frm_data.append("_token", "{{csrf_token()}}");
                        $.ajax(
                                {
                                    url: "{{URL::route('mainHorizontalPics.store')}}",
                                    type: "POST",
                                    data: _frm_data,
                                    dataType: "json",
                                    processData: false,  // 告诉jQuery不要去处理发送的数据
                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                    success: function (data) {
                                        $imgPane = $("<div></div>");
                                        $imgPane.addClass("item");
                                        $imgPane.addClass("wrapfix");
                                        $imgPane.attr("data-id", data.id);

                                        $imgDiv = $("<div></div>");
                                        $imgDiv.addClass("picBox");
                                        $img = $("<img />");
                                        $img.attr("src", "statics/images/upload/" + data.filename);
                                        $img.addClass("image");
                                        $imgDiv.append($img);

                                        $imgPane.append($imgDiv);

                                        $cbBoxDiv = $("<div></div>");
                                        $cbBoxDiv.addClass("cbBox");
                                        $cbBoxDiv.append('<input type="checkbox" class="selPic" data-id="{0}">'.format(data.id));

                                        $imgPane.append($cbBoxDiv);
                                        $("#pane_for_add").after($imgPane);
                                    }

                                });

                    });

                }
        )
        ;
    </script>
@stop