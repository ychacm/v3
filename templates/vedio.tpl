{include file="header.tpl"}
<div id="cen">
	<div id="cenleft">
		{include file="lefttop.html"}
	<div id="leftNav"><div class="top">NEWS</div>
		<ul>
			<li><a href="vedio.php?act=one">影音中心</a></li>
		</ul>
	</div>
		{include file="leftfoot.html"}
	</div>
    <div id="cenright1">
        {include file="navtop.html"}
        <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
        <ul>
          	标题：{$vedio.fileName}
			<a href="{$vedio.fileUrl}">dow</a>
			<script type="text/javascript" src="jwplayer.js"></script>									
			<video class="jwplayer" src="{$vedio.fileUrl}"
			poster="preview.jpg"></video>
		</ul>
    </div>
</div>
{include file="foot.tpl"}