/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $("a[name='delete']").click(function() {
        var result = confirm("确认删除该条记录？");
        if (result)
            location.href = "delete/id/" + $(this).attr("id");
    });
});

