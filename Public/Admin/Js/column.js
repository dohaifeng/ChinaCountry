/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    $("a[name='addClassify']").click(function() {
        $(this).parent().parent().next().toggle(2000);
        //$(this).parents(".table").find(".trHide").toggle(2000);
    });
});

$(function() {
    $("a[name='delete']").click(function() {
        var result = confirm("确认删除该栏目？\n这将可能会影响到前台页面的显示!");
        if (result)
            location.href = "delete/id/" + $(this).attr("id");
    });
});
