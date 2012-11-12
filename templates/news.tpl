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
          				<h3 style="text-align:center; height:80px;">{$news.newsTitle}</h3>
						<div style="width:770px;margin-left:20px;font-size:14pt;">{$news.newsText}</div>
						时间:{$news.newsTime}
                </ul>
            </div>
</div>
{include file="foot.tpl"}