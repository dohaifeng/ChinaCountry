<div class="introduce videoPlay">
    <div class="bottomImg">
        <img src="__PUBLIC__/Home/img/images/index_15.png"/>
        <img src="__PUBLIC__/Home/img/images/index_16.png"/>
    </div>
    <div class="pro-header">
        <span>视频播放排行</span>
    </div>
    <div class="pro-rank">
        <foreach name='video' key='key' item='tmp'>
            <div>
                <img src="__PUBLIC__/Home/img/images/index_num_0{$key+1}.png" class="float-left"/>
                <a href="{:U('Content/index',array("id" => $tmp['id']))}" class="float-left">
                    <p>{$tmp.title}</p>
                    <p>播放量：<span>{$tmp.times}</span></p>
                </a>
            </div>
        </foreach>
    </div>
</div>