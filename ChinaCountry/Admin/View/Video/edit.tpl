<taglib name="edit" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="__PUBLIC__/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="__PUBLIC__/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <script src="__PUBLIC__/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="__PUBLIC__/Admin/Js/flat-ui-pro.min.js"></script>
        <link rel="stylesheet" href="__PUBLIC__/Admin/Css/add_category.css" />
    </head>
    <body>
        <form action="__URL__/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{$video.0.id}" />
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加视频</td>
                </tr>
                <tr>
                    <td class="colorBlack">标题：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="title" value="{$video.0.title}"/></td>
                </tr>
                <tr>
                    <td class="colorBlack">所属分类：</td>
                    <td class='text_left'>
                        <select class="form-control select select-primary select-block" name="column_id">
                            <foreach name="column" key="key" item="tmp">
                                <if condition="$video['0']['column_id'] eq $tmp['id']">
                                    <option value="{$tmp['id']}" selected>{$tmp['name']}</option>
                                    <else />
                                    <option value="{$tmp['id']}">{$tmp['name']}</option>
                                </if>
                            </foreach>
                        </select>
                    </td>
                </tr>
                <!--
<tr>
    <td class="colorBlack">视频链接：</td>
    <td><input class="form-control input-sm inputw" type="text" name="video" value="{$video.0.video}"/></td>
</tr>
                -->
                <tr>
                    <td>缩略图：</td>
                    <td>
                        <div class="form-group">
                            <div class="fileinput fileinput-new essay_add" data-provides="fileinput">
                                <span class="btn btn-primary btn-embossed btn-file">
                                    <span class="fileinput-new"><span class="fui-upload"></span>　选择文件</span>
                                    <span class="fileinput-exists"><span class="fui-gear"></span>　重选</span>
                                    <input type="file" name="img" accept="">
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>添加视频文件：</td>
                    <td>
                        <div class="form-group">
                            <div class="fileinput fileinput-new essay_add" data-provides="fileinput">
                                <span class="btn btn-primary btn-embossed btn-file">
                                    <span class="fileinput-new"><span class="fui-upload"></span>　选择文件</span>
                                    <span class="fileinput-exists"><span class="fui-gear"></span>　重选</span>
                                    <input type="file" name="video" accept="">
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="colorBlack">正文内容：</td>
                    <td><edit:kineditor public="__PUBLIC__/Admin" name='content' content="{$video.0.introduce}"></edit:kineditor></td>

                </tr>
                <tr>
                    <td class="text_left" colspan="2">
                        <input type="submit" value="提交" class="input_button"/>
                        <input type="reset" class="input_button"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
    <script>
        $("select").select2({dropdownCssClass: 'dropdown-inverse'});
        $(':checkbox').radiocheck();
    </script>
</html>
