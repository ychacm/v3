{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}	
			<div id="leftNav"><div class="top">VEDIO</div>
					<ul>
						<li><a href="vedio.php?act=one">影音中心</a></li>
					</ul>
				</div>
				{include file="leftfoot.html"}	
        	</div>
			<div id="cenright1">
            {include file="navtop.html"}
			
             <div class="nav"><h1><span>首页</span>影音中心</h1></div>
						<div class="vedio">
                <ul style="margin:10px">
		 				{section name=record loop=$products}
		 				<li><img src="{$products[record].imgurl}" widht="80" height="120"><a href="vedio.php?act=view&fileId={$products[record].fileId}"><p style="color:#333">{$products[record].fileName}</p></a></li>
		 						 				            {sectionelse}
                <tr><td colspan="5"></td></tr>
            {/section}
    
                </ul>
             </div>
        {include file="listnav.html"}
</div>
</div>
{include file="foot.tpl"}