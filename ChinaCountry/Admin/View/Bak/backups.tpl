<link rel="stylesheet" href="__PUBLIC__/Admin/css/public.css">
<link rel="stylesheet" href="__PUBLIC__/Admin/css/bootstrap.css">
<script type="text/javascript" src="__PUBLIC__/Admin/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    function click_in(a, b) {
        $(a).append(b);
    }
</script>
<style type="text/css">
    .form-control{width: 30%}
    .copystr{display: block;margin-bottom: 10px;}
</style>

<form method="post">


    <!-- <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">备份数据库大小：</label>
      <div class="col-sm-10">
        <input name="size" value="1024" type="text" class="form-control" id="inputEmail3" placeholder="(K)推荐10M以下">
      </div>
    </div> -->
    <table class="table table-striped table-bordered table-hover tableW">
        <tr>
            <th width="150">备份名称：</th>
            <td><input name="name" value="{$time}" type="text" class="form-control" id="inputEmail3" placeholder=""></td>
        </tr>
        <tr>
            <td colspan="2" class="text_left"><input type="submit" class="btn btn-primary classLeft" value="确定"></td>
        </tr>
    </table>
</form>

