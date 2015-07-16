@extends('admin.layouts.master')

@section('title', '师资')

@section('styles')
    @parent
    <link rel="stylesheet" href="statics/css/jquery-ui.min.css">
@stop
@section('mainbody')
    <div id="form_new" style="display: none" title="新增师资信息">
        <!--iframe id="hiddenframe" name="hiddenframe" style="display: none;" width="200" height="200"></iframe-->
        <div class="row">
            <div class="col-sm-2">
                <div>
                    <img id="ImgPr" class="pull-left" width="115" height="165" style='height:164px;'>
                </div>
            </div>
            <div class="col-sm-10">
                <form id="form_teacher" class="form-horizontal">
                    <input type="hidden" name="teacher_id" id="teacher_id"/>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <input name="myFile" type="file" id="upload_file" required="required" accept="image/*"
                                   class="col-sm-10"/></div>

                        <label for="teacher_name" class="col-sm-2 control-label">姓名</label>

                        <div class="col-sm-4">
                            <input class="form-control" name="teacher_name" id="teacher_name" type="text"
                                   required="required"/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="group_id" class="col-sm-2 control-label">分组</label>

                        <div class="col-sm-4"><select class="form-control" name="group_id" id="group_id"
                                                      required="required">
                                @foreach($groups as $group)
                                    <option value="{{$group['id']}}">{{$group['name']}}</option>
                                @endforeach
                            </select></div>

                        <label for="order_num" class="col-sm-2 control-label">顺序号</label>

                        <div class="col-sm-4"><input class="form-control" name="order_num" type="number"
                                                     id="order_num"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teacher_desc" class="col-sm-2 control-label">简介</label>

                        <div class="col-sm-10"><input class="form-control" name="teacher_desc" id="teacher_desc"
                                                      type="text"
                                                      required="required"/></div>
                    </div>
                    <div class="form-group"><label for="teacher_content" class="col-sm-2 control-label">内容</label>

                        <div class="col-sm-10"><textarea class="form-control"
                                                         name="teacher_content"
                                                         id="teacher_content"
                                                         required="required"></textarea></div>
                    </div>


                    <div class="checkbox"><label><input name="teacher_hidden" type="checkbox"
                                                        id="teacher_hidden"/>是否隐藏</label>

                        <label><input name="show_in_intro" type="checkbox" id="show_in_intro"
                                      checked="checked"/>在简介上显示</label>
                    </div>
                    <button type="submit" id="submit_btn" style="display:none"></button>
                </form>
            </div>
        </div>
    </div>

    <div id="main" class="container">
        <div id="top_action">
            <a id="btn_new" href="javascript:;" class="btn btn-primary" role="button">新增</a>
        </div>
        <table id="table_list" class="table table-bordered">
            <tr>
                <th width="100px">
                    姓名
                </th>
                <th width="130px">
                    照片
                </th>
                <th width="100px">
                    所属组
                </th>
                <th width="100px">
                    顺序号
                </th>
                <th width="100px">
                    创建日期
                </th>
                <th width="100px">
                    隐藏
                </th>
                <th width="100px">
                    在简介上显示
                </th>
                <th width="150px">
                    操作
                </th>
            </tr>
            @foreach($teachers as $teacher)
                <tr id="teacher_row_{{$teacher['id']}}">
                    <td>
                        {{$teacher['name']}}
                    </td>
                    <td>
                        <img class='lazy'
                             src="statics/images/boya/t-face.jpg"
                             data-original="statics/images/upload/{{$teacher->pic()->getResults()['filename']}}"
                             width="115"
                             height="165"
                             style='height:164px;'></td>
                    <td>
                        {{$teacher->group()->getResults()['name']}}
                    </td>
                    <td>
                        {{$teacher['ord_no']}}
                    </td>

                    <td>
                        {{$teacher['created_at']}}
                    </td>
                    <td>
                        @if($teacher->visible!=1)
                            是
                        @endif
                    </td>
                    <td>
                        @if($teacher->in_intro==1)
                            是
                        @endif
                    </td>

                    <td>
                        <a href="#" data-id="{{$teacher['id']}}" class="modify_link btn btn-primary"
                           role="button">改</a>

                        <a href="#" data-id="{{$teacher['id']}}" class="delete_link btn btn-primary"
                           role="button">删</a>

                        <a href="#" data-id="{{$teacher['id']}}" class="view_link btn btn-primary"
                           role="button">阅</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@stop
@section('scripts')
    @parent
    <script src="statics/plugin/jquery-ui.min.js"></script>
    <script src="statics/plugin/jquery.lazyload.min.js"></script>
    <script src="statics/plugin/jq_extends.js"></script>

    <script>
        function clear_dialog() {
            $("#upload_file").attr("required", true);
            $("#teacher_id").val("");
            $("#teacher_name").val("");
            $("#teacher_desc").val("");
            $("#teacher_content").val("");
            $("#group_id").val("-1");
            $("#order_num").val("");
            $("#show_in_intro").prop("checked", true);
            $("#teacher_hidden").prop("checked", false);
            $("#error_msg").val("");
            $("#ImgPr").attr("src", "");
            $("#upload_file").val("");
        }

        function create_opera_pane(teacher_id) {
            r_value = '<a href="#" data-id="' + teacher_id + '" class="modify_link btn btn-primary" role="button">改</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="delete_link btn btn-primary" role="button">删</a>';
            r_value += '<a href="#" data-id="' + teacher_id + '" class="view_link btn btn-primary" role="button">阅</a>';
            return r_value;
        }

        function bindNewTeacherSubmit() {
            $("#form_teacher").unbind("submit");
            $("#form_teacher").submit(
                    function (event) {
                        event.preventDefault();
                        var _frm_data = new FormData(this);
                        _frm_data.append("_token", "{{csrf_token()}}");

                        $.ajax(
                                {
                                    url: "teachers",
                                    type: "POST",
                                    data: _frm_data,
                                    processData: false,  // 告诉jQuery不要去处理发送的数据
                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                    complete: function (data) {
                                        $(".ui-widget-overlay").css({"z-index": "100"}).html("");
                                    },
                                    beforeSend: function () {
                                        $(".ui-widget-overlay").css({"z-index": "102"}).html("正在增加，请稍候。。。");
                                    },
                                    error: function (data) {
                                        alert("上传生产数据异常！");
                                    },
                                    success: function (data) {
                                        if (data.success != 1) {
                                            alert("添加失败:" + data.msg);
                                            return;
                                        }
                                        $ele_tr = $("<tr id=\"teacher_row_" + data.teacher_id + "\"></tr>");

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.teacher_name);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $('<td><img class="lazy" src="statics/images/boya/t-face.jpg"'
                                        + ' data-original="statics/images/upload/'
                                        + data.photo_file + '" width="115" height="165" style="height:164px;"></td>');
                                        $tmptd.children().eq(0).lazyload();
                                        $ele_tr.append($tmptd);


                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.group_name);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.order_num);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.create_date);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        if (data.visible != 1)
                                            $tmptd.text("是");
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        if (data.show_in_intro == 1)
                                            $tmptd.text("是");
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td>" + create_opera_pane(data.teacher_id) + "</td>");
                                        setLinks($tmptd);
                                        $ele_tr.append($tmptd);

                                        $("#table_list").append($ele_tr);
                                        alert("添加完成");
                                        clear_dialog();
                                    },
                                    dataType: "json"
                                }
                        )
                    }
            );
        }

        function bindEditTeacherSubmit() {
            $("#form_teacher").unbind("submit");
            $("#form_teacher").submit(
                    function (event) {
                        event.preventDefault();
                        var _frm_data = new FormData(this);
                        _frm_data.append("_token", "{{csrf_token()}}");
                        $.ajax(
                                {
                                    url: "teachers/" + this.teacher_id.value,
                                    type: "POST",
                                    data: _frm_data,
                                    processData: false,  // 告诉jQuery不要去处理发送的数据
                                    contentType: false,   // 告诉jQuery不要去设置Content-Type请求头
                                    complete: function (data) {
                                        $(".ui-widget-overlay").css({"z-index": "100"}).html("");
                                    },
                                    beforeSend: function () {
                                        $(".ui-widget-overlay").css({"z-index": "102"}).html("正在提交，请稍候。。。");
                                    },
                                    error: function (data) {
                                        alert("上传数据异常！");
                                    },
                                    success: function (data) {
                                        if (data.success != 1) {
                                            alert("添加失败:" + data.msg);
                                            return;
                                        }
                                        $ele_tr = $("<tr id=\"teacher_row_" + data.teacher_id + "\"></tr>");

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.teacher_name);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $('<td><img class="lazy" src="../statics/images/boya/t-face.jpg"'
                                        + ' data-original="../statics/images/upload/'
                                        + data.photo_file + '" width="115" height="165" style="height:164px;"></td>');
                                        $tmptd.children().eq(0).lazyload();
                                        $ele_tr.append($tmptd);


                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.group_name);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.order_num);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        $tmptd.text(data.create_date);
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        if (data.visible != 1)
                                            $tmptd.text("是");
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td></td>");
                                        if (data.show_in_intro == 1)
                                            $tmptd.text("是");
                                        $ele_tr.append($tmptd);

                                        $tmptd = $("<td>" + create_opera_pane(data.teacher_id) + "</td>");
                                        setLinks($tmptd);
                                        $ele_tr.append($tmptd);

                                        $('#teacher_row_' + data.teacher_id, "#table_list").replaceWith($ele_tr);

                                        alert("修改完成");
                                    },
                                    dataType: "json"
                                }
                        )
                    }
            );
        }

        $(document).ready(function () {
                    $("img.lazy").lazyload({threshold: 50});
                    $("#upload_file").uploadPreview({
                        Img: "ImgPr", Width: 116, Height: 165
                    });


                    setLinks();
                }
        );
        function setLinks(contxt) {
            $(".modify_link", contxt).unbind("click");
            $(".modify_link", contxt).click(function (event) {
                event.preventDefault();
                bindEditTeacherSubmit();
                prepareTeacher($(this).data("id"));
            });


            $(".delete_link", contxt).unbind("click");
            $(".delete_link", contxt).click(function (event) {
                event.preventDefault();
                if (confirm("是否要删除")) {
                    $tmp_this = $(this);

                    $.ajax({
                        dataType: "json",
                        data: {
                            _token: "{{csrf_token()}}"
                        },
                        url: "teachers/" + $(this).data("id"),
                        type: "DELETE",
                        success: function (data) {
                            if (data.ok == 1)
                                $tmp_this.parent().parent().remove();
                        }
                    });
                }
            });
            $("#btn_new", contxt).click(function () {
                bindNewTeacherSubmit();
                newTeacher();
            });
        }


        function prepareTeacher(teacherId) {
            $.get("teachers/" + teacherId + "/edit", null, function (data) {
                if (data.success == 1) {
                    fetchTeacher(data);
                    modifyTeacher();
                }
            });
        }

        function fetchTeacher(teacher) {
            clear_dialog();
            $("#ImgPr").attr("src", "statics/images/upload/" + teacher.photo_file);
            $("#upload_file").attr("required", false);
            $("#teacher_name").val(teacher.teacher_name);
            $("#teacher_desc").val(teacher.teacher_desc);
            $("#teacher_content").val(teacher.teacher_content);
            $("#order_num").val(teacher.order_num);
            $("#group_id").val(teacher.group_id);
            $("#teacher_id").val(teacher.teacher_id);
            if (teacher.show_in_intro == 1)
                $("#show_in_intro").prop("checked", true);
            else
                $("#show_in_intro").prop("checked", false);
            if (teacher.visible == 0)
                $("#teacher_hidden").prop("checked", true);
            else
                $("#teacher_hidden").prop("checked", false);
        }

        function modifyTeacher() {
            $("#form_new").dialog({
                resizable: false,
                height: 400,
                width: 700,
                modal: true,
                //按钮
                buttons: {
                    "取消": function () {
                        //关闭按钮
                        $(this).dialog("close");
                    },
                    "确定": function () {
                        $("#submit_btn").click();
                    }
                }
            });
        }

        function newTeacher() {
            clear_dialog();
            $("#form_new").dialog({
                resizable: false,
                height: 400,
                width: 700,
                modal: true,
                //按钮
                buttons: {
                    "取消": function () {
                        //关闭按钮
                        $(this).dialog("close");
                    },
                    "确定": function () {
                        //$("#form_teacher").get(0).checkValidity();
                        $("#submit_btn").click();
                        //createNewTeacher();
                    }
                }
            });
        }
        ;
    </script>
@stop