<div class="introduce dynamic-state">
    <div class="bottomImg">
        <img src="__PUBLIC__/Home/img/images/index_15.png"/>
        <img src="__PUBLIC__/Home/img/images/index_16.png"/>
    </div>
    <div class="pro-header">
        <span>栏目动态</span>
        <i class="glyphicon glyphicon-eye-open float-right"><a href="{:U('dynamic/index')}">See More News</a></i>
    </div>
    <div class="pro-news">
        <foreach name='news' key='key' item='tmp'>
            <p>
                <a href="{:U('Content/newsDetails',array("id" => $tmp['id']))}"><span class="float-left">{$tmp.title}</span>
                    <span class="float-right">{$tmp.date|default=time()|date='m-d',###}</span></a>
            </p>
        </foreach>
    </div>
</div>