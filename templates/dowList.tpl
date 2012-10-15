{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">DOWNLOAD</div>
					<ul>
						<li><a href="dow.php?act=one">课件ppt</a></li>
						<li><a href="dow.php?act=two">媒体资料</a></li>
						</ul>
				</div>
			{include file="leftfoot.html"}	
            </div>
            <div id="cenright1">
            {include file="navtop.html"}
             <div class="nav"><h1><span>首页</span>下载中心</h1></div>
						<div class="dow">
                <ul>
          						 				{section name=record loop=$products}
		 				<li><p>{$products[record].dowFile}</p><img src="{$products[record].imgurl}" width="200" height="120"><p style="height:120px;line-height:120px;float:left;width:480px;text-indent:25px;">作者：{$products[record].zz}</p><a href="{$products[record].dowurl}"><img src="images/down.gif" style="float:right;margin-top:45px;margin-bottom:40px;" ></a></a></li>
		 				            {sectionelse}
                <tr><td colspan="5"></td></tr>
            {/section}
    
                </ul>
             </div>
        {include file="listnav.html"}    
            </div>
</div>
{include file="foot.tpl"}