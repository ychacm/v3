{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	{include file="lefttop.html"}
			<div id="leftNav"><div class="top">NEWS</div>
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
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <div id="kclist">
          			<div class="title"><p>{$kc.classTitle}</p><em>{$kc.navText}</em></div><img src="{$kc.imgurl}" width="150">
					<div class="text">{$kc.classText}</div>
	            </div>    
 
            </div>
</div>
{include file="foot.tpl"}