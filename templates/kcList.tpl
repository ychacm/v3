{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
	        	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">COURSE</div>
					<ul>
						<li><a href="kc.php?act=one">大师课程</a></li>
						<li><a href="kc.php?act=two">总裁必上的7堂课</a></li>
						<li><a href="kc.php?act=tree">特别课程</a></li>
					</ul>
				</div>
				{include file="leftfoot.html"}	
        	</div>
			<div id="cenright1">
			
            {include file="navtop.html"}
             <div class="nav"><h1><span><a href="http://ychacm.byethost5.com/rele/">首页</a></span>重要公告</h1></div>
             <div id="kc">
               
            <p>{$tableName}</p>

            
            {section name=record loop=$products}
			<dl>
				<dt><a href="kc.php?act=view&classId={$products[record].classId}" style="color:red">{$products[record].classTitle}</a></dt>
				<dd class="pic"><img src="{$products[record].imgurl}" width="200" height="160"></dd>
				<dd class="text"><a href="kc.php?act=view&classId={$products[record].classId}">{$products[record].navText}</a></dd>
			</dl>
            {sectionelse}
                <tr><td colspan="5"></td></tr>
            {/section}
    
             </div>
 {include file="listnav.html"}       
</div>
</div>
{include file="foot.tpl"}

      
