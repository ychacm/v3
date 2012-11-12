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
        <ul style="text-align:center;">
          	{$vedio.fileName}
			<div id="mediaplayer" style="text-align:center;">JW Player goes here</div>
			<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
			<script type="text/javascript">
			jwplayer("mediaplayer").setup({
				flashplayer: "jwplayer/player.swf",
				file: "pdf/1.mov",
				image: "jwplayer/preview.jpg",
				width:"800",
				height:"430"
			});
	</script>
		</ul>
    </div>
</div>
{include file="foot.tpl"}