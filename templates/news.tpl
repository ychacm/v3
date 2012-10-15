{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="news.php?act=one">重要公告</a></li>
						<li><a href="news.php?act=two">超越新闻</a></li>
					</ul>
				</div>
				{include file="leftfoot.html"}	
        	</div>
		    <div id="cenright1">
            {include file="navtop.html"}
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
          				标题：{$news.newsTitle}
									文本: {$news.newsText}
									时间:{$news.newsTime}
                </ul>
            </div>
</div>
{include file="foot.tpl"}