@extends('admin.layouts.master')

@section('title', '页脚滚动栏图片')

@section('styles')
    @parent
    <style>
        #myFile {
            display: none;
        }

        .item {
            height: 150px;
        }

        .item div {
            width: 100%;
            height: 80%;
            overflow: hidden;
        }

        .item div img {
            width: 100%;
        }

        .selPic {
            width: 100%;
        }

        .btnAdd {
            height: 100%;
            width: 100%;
        }

        #topBar {
            margin-bottom: 20px;
        }

    </style>
@stop

@section("mainbody")
    <div class="container">
        <div id="topBar">
            <button id="btnDel" class="form-control">删除</button>
        </div>
        <div class="row">
            @foreach($footerPics as $footPic)
                <div class="col-sm-2 item">
                    <div>
                        <img src="statics/images/upload/{{$footPic->filename}}" class="image">
                    </div>
                    <input type="checkbox" class="selPic" data-id="{{$footPic->id}}">
                </div>
            @endforeach
            <div class="col-sm-2 item" id="pane_for_add">
                <div>
                    <form name="frm_upload_file" id="frm_upload_file">
                        <input type="file" id="myFile" name="myFile"/>
                    </form>
                    <button id="btnAdd" class="form-control btnAdd">添加</button>
                </div>
            </div>
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
                                        url: "{{URL::route('footerPics.destroy')}}",
                                        type: "DELETE",
                                        data: _data,
                                        dataType: "json",
//                                    processData: false,  // 告诉jQuery不要去处理发送的数据
//                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                        success: function (data) {
                                            var _selector;
                                            _data.picIdList.forEach(function (ele) {
                                                _selector = String.format('input[data-id="{0}"]', ele);
                                                $(_selector).parent().remove();

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
                                    url: "{{URL::route('footerPics.store')}}",
                                    type: "POST",
                                    data: _frm_data,
                                    dataType: "json",
                                    processData: false,  // 告诉jQuery不要去处理发送的数据
                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                    success: function (data) {
                                        $imgPane = $("<div class=\"col-sm-2\"></div>");
                                        $imgPane.addClass("item");
                                        $imgDiv = $("<div></div>");
                                        $img = $("<img />");
                                        $img.attr("src", "statics/images/upload/" + data.filename);
                                        $img.addClass("image");
                                        $imgDiv.append($img);
                                        $imgPane.append($imgDiv);
                                        $imgPane.append('<input type="checkbox" class="selPic" data-id="{0}">'.format(data.id));
                                        $("#pane_for_add").before($imgPane);
                                    }

                                });

                    });

                }
        )
        ;
    </script>
@stop