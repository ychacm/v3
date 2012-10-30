{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">NEWS</div>
					<ul>
						<li><a href="ysj.php?act=one">超级演说家</a></li>
						<li><a href="ysj.php?act=two">世界大师</a></li>
						<li><a href="ysj.php?act=tree">战略合作</a></li>
					</ul>
				</div>
				{include file="leftfoot.html"}	
        	</div>
			<div id="cenright1">
            {include file="navtop.html"}
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
					<div id="ysj">
          				<img src="{$ysj.imgurl}" width="200" height="350">
						<div class="title">{$ysj.ysjTitle}{$ysj.navText}</div>
								<div class="text">	{$ysj.ysjText}</div>
	                </ul>
            </div>
</div>
{include file="foot.tpl"}