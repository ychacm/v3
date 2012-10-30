{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}	
				{include file="leftfoot.html"}
            </div>
            <div id="cenright1">
            <img src="images/nav.jpg">
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
          				标题：{$news.newsTitle}
						文本: {$news.newsText}
						时间:{$news.newsTime}
                </ul>
                <center>第一页上一页下一页尾页</center>
            </div>
</div>
{include file="foot.tpl"}