/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function() {
    $(".table select").change(function() {
        var result = confirm("确定要修改权限？");
        if (!result) {
            location.reload();
            return;
        }
        $.ajax({
            type: "get",
            url: "setAuthGroupAccess/group_id/" + $(this).val() + "/id/" + $(this).attr("id"),
            data: null,
            dataType: "json",
            success: function(result) {
                alert(result.info);
                if (result.status == 0)
                    location.reload();
            }
        });
    });

    $("a[name='delete']").click(function() {
        var result = confirm("确认删除该用户？");
        if (result)
            location.href = "delete/id/" + $(this).attr("id");
    });
})
