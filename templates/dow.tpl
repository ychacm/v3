{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="dow.php?act=one">课件ppt</a></li>
						<li><a href="dow.php?act=two">媒体资料</a></li>
					</ul>
				</div>
				{include file="leftfoot.html"}
        	</div>
            <div id="cenright1">
            {include file="navtop.html"}
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
								图片：<img src="{$dow.imgurl}">
          				标题：{$dow.dowFile}
									文本: {$dow.zz}
									<a href="{$dow.dowurl}">dow</a>
	   </ul>
            </div>
</div>
{include file="foot.tpl"}