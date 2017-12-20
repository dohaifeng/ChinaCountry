<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link href="/chinacountry/Public/Admin/css/bootstrap.min.css"  rel="stylesheet" />
        <link href="/chinacountry/Public/Admin/css/flat-ui-pro.min.css"  rel="stylesheet" />
        <script src="/chinacountry/Public/Admin/Js/jquery-1.9.1.min.js"></script>
        <script src="/chinacountry/Public/Admin/Js/flat-ui-pro.min.js"></script>
        <link rel="stylesheet" href="/chinacountry/Public/Admin/Css/add_category.css" />
    </head>
    <body>
        <form action="/chinacountry/index.php/Admin/News/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo ($news['id']); ?>" />
            <table class="table">
                <tr >
                    <td class="th" colspan="2">编辑新闻 | <a href="/chinacountry/index.php/Admin/News/index" class="colorBlue">上级</a></td>
                </tr>
                <tr>
                    <td class="colorBlack">标题：</td>
                    <td><input class="form-control input-sm inputw" type="text" name="title" value="<?php echo ($news['title']); ?>"/></td>
                </tr>
                <tr>
                    <td class="colorBlack">正文内容：</td>
                    <td><link rel="stylesheet" href="/chinacountry/Public/Admin/kindeditor/themes/default/default.css" /><link rel="stylesheet" href="/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.css" /><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/kindeditor-all-min.js"></script><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/lang/zh-CN.js"></script><script charset="utf-8" src="/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.js"></script><script>KindEditor.ready(function(K) {var editor1 = K.create('textarea[name=content]', {cssPath : '/chinacountry/Public/Admin/kindeditor/plugins/code/prettify.css',uploadJson : '/chinacountry/Public/Admin/kindeditor/inlcude/upload_json.php',fileManagerJson : '/chinacountry/Public/Admin/kindeditor/inlcude/file_manager_json.php',allowFileManager : true,afterCreate : function() {var self = this;K.ctrl(document, 13, function() {self.sync();K('form[name=example]')[0].submit();});K.ctrl(self.edit.doc, 13, function() {self.sync();K('form[name=example]')[0].submit();});}});prettyPrint();});</script><textarea name="content" style="width:800px;height:400px;visibility:hidden;"><?php echo ($news['content']); ?></textarea></td>

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