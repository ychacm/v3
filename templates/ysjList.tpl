{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
            	<div id="leftNav"><div class="top">ORATER</div>
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
             <div class="nav"><h1><span>首页</span>演说家</h1></div>
                <div class="ysj">
			            {section name=record loop=$products}
						<dl>
								<dt>{$products[record].ysjTitle}</dt>
								<dd class="pic"><img src="{$products[record].imgurl}" width="120" height="160"></dd>
								<dd class="text"><a href="ysj.php?act=view&ysjId={$products[record].ysjId}">{$products[record].navText}</a></dd>
						</dl>
		 				{sectionelse}
			                <tr><td colspan="5"></td></tr>
			            {/section}
						 </div>
			        {include file="listnav.html"}
</div>
</div>
{include file="foot.tpl"}