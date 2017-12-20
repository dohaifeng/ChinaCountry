$(function() {
    //删除用户、帖子
    $(".del").click(function() {
        var result = confirm("确认删除该条信息？");
        if (result)
            location.href = "delete/id/" + $(this).attr("id");
    });
    //返回按钮操作
    $('#back').click(function() {
        window.history.back();
    });
    $('#back_move').click(function() {
        location.href = "index.php";
    });
    //修改文件名操作
    $('#sure').click(function() {
        if ($('#newName').attr('value') === "") {
            alert('修改内容不能为空');
            return false;
        }
    });
    //移动路径操作
    $('#sure').click(function() {
        if ($('#newName').attr('value') === "") {
            alert('修改内容不能为空');
            return false;
        }
    });
});

