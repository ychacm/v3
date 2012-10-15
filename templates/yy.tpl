{foreach from=$ly item=news}
								<li><h1><span>{$news.newsTime}</span><a href="news.php?newsId={$news.newsId}">{$news.newsTitle}<h1></a></li>
		 						{/foreach}

<p align="center">页数：<span class="STYLE1">{$pcunt}</span>当前页：<span class="STYLE1">{$page}</span><a href="newsList.php"></a>{$qian}{$next}<a href="newsList.php?page={$pcunt}">尾页</a></p>
