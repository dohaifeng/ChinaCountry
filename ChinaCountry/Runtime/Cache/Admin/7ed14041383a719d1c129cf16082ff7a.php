<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/add_category.css" />
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/essay.css" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
    </head>
    <body>
        <form action="<?php echo U('Video/insert');?>" method="post" enctype="multipart/form-data" >
            <table class="table tableW">
                <tr >
                    <td class="th" colspan="2">添加视频</td>
                </tr>
                <tr>
                    <td class="colorBlack">标题：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="title"/></td>
                </tr>
                <tr>
                    <td class="colorBlack">所属分类：</td>
                    <td class='text_left'>
                        <select class="form-control select select-primary select-block" name="column_id">
                            <?php if(is_array($column)): foreach($column as $key=>$tmp): ?><option value="<?php echo ($tmp['id']); ?>" selected><?php echo ($tmp['name']); ?></option><?php endforeach; endif; ?>
                        </select>
                    </td>
                </tr>
                <!--
    <tr>
        <td class="colorBlack">视频链接：</td>
        <td><input class="form-control input-sm inputw" type="text" name="video"/></td>
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
                    <td class="colorBlack">视频介绍：</td>
                    <td><link rel="stylesheet" href="/chinacountry/Public/Admin/kindeditor/themes/default/default.css" /><link rel="stylesheet" href="/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.css" /><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/kindeditor-all-min.js"></script><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/lang/zh-CN.js"></script><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.js"></script><script>KindEditor.ready(function(K) {var editor1 = K.create('textarea[name=introduce]', {cssPath : '/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.css',uploadJson : '/chinacountry/Public/Admin/kindeditor/inlcude/upload_json.php',fileManagerJson : '/chinacountry/Public/Admin/kindeditor/inlcude/file_manager_json.php',allowFileManager : true,afterCreate : function() {var self = this;K.ctrl(document, 13, function() {self.sync();K('form[name=example]')[0].submit();});K.ctrl(self.edit.doc, 13, function() {self.sync();K('form[name=example]')[0].submit();});}});prettyPrint();});</script><textarea name="introduce" style="width:800px;height:400px;visibility:hidden;"></textarea></td>

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