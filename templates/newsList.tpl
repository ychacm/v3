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
             <div class="nav"><h1><span><a href="http://ychacm.byethost5.com/rele/">首页</a></span>{$tableName}</h1></div>
             <div>  <ul>
            {section name=record loop=$products}
            <li style="list-style-type:none;"><h1><span>{$products[record].newsTime|truncate:10:"":true}</span><a href="news.php?act=view&newsId={$products[record].newsId}">{$products[record].newsTitle}</h1></a></li>
            {sectionelse}
                <tr><td colspan="5"></td></tr>
            {/section}
             </ul>
             </div>
              {include file="listnav.html"}
             </div>
</div>
{include file="foot.tpl"}