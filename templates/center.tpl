		<div id="cen">
        	<div id="cenleft">
            	<div id="cenleft1">
				
                	<dl>
                    	<dt><a href="vedio.php?act=one">精彩视频</dt>
                        <dd class="pic"><img src="images/1.png"></dd>
                        <dd class="text">影音播放中心</dd>
                    </dl>
                    <dl>
                    	<dt><a href="ysj.php?act=one">讲师介绍</a></dt>
                        <dd class="pic"><img src="images/2.png"></dd>
                        <dd class="text">百联国际讲师</dd>
                    </dl>
                    <dl>
                    	<dt><a href="kc.php?act=one">课程档案</a></dt>
                        <dd class="pic"><img src="images/3.png"></dd>
                        <dd class="text">重要课程资料</dd>
                    </dl>
                </div>
                {include file="lefttop.html"}
			          {include file="leftfoot.html"}
            </div>
            <div id="cencen">
            	   <div id="container">	
		<div id="pageBottomGraphic">
			<div id="pageArea">
				<div id="mainContent">
				  <div id="pagecenter">
				    <div id="pagecentertop"><a href="http://www.magicyourlife101.com/Default2.aspx" target="_blank"><img alt="" src="images/7.jpg" border="0" width="605" height="300"></a></div>
                  <div id="splitline"></div>
                           <div id="centerbanner">
                            <div id="thumb1" class="thumb" style="z-index: 0; "><a href="images/3.jpg" src="/data_show.aspx?path=news&amp;id=216"><img src="images/3.jpg" alt="" style="overflow: hidden; margin-top: 0px; margin-left: 0px; top: 0.49607304955564446px; left: 0.49607304955564446px; width: 110px; height: 110px; padding: 4.503926950444356px; " class=""></a></div>
                            <div id="thumb2" class="thumb" style="z-index: 10; "><a href="images/4.jpg" src="http://www.ohashike.jp/bigsight.html"><img src="images/4.jpg" alt="" style="overflow: hidden; margin-top: -64.89981334632667px; margin-left: -59.90752001199384px; top: 49.922933343328204%; left: 49.889049115077%; width: 124.9667147345231px; height: 124.9667147345231px; padding: 2.0066570530953802px; " class="hover"></a></div>
                            <div id="thumb3" class="thumb" style="z-index: 0; "><a href="images/5.jpg" src="http://myl101.taobao.com/" target="_blank"><img src="images/5.jpg" alt="" style="overflow: hidden; margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 110px; height: 110px; padding: 5px; " class=""></a></div>
                             <div id="thumb4" class="thumb" style="z-index: 0; "><a href="images/6.jpg" src="/Default2.aspx"><img src="images/6.jpg" alt="" style="overflow: hidden; margin-top: -27.931951226075068px; margin-left: -25.900536591451427px; top: 21.32985366354823px; left: 21.837707322204142px; width: 116.09424390387092px; height: 116.09424390387092px; padding: 3.476439024032269px; " class=""></a></div>
                             <div id="thumb5" class="thumb" style="z-index: 0; "><a href="images/7.jpg" src="/data_show.aspx?

id=49&amp;path=course_special"><img src="images/7.jpg" alt="" style="overflow: hidden; margin-top: 0px; margin-left: 0px; top: 0px; left: 0px; width: 110px; height: 110px; padding: 5px; " class=""></a></div>
                    </div> 
                <!--////π„∏ÊΩ· ¯-->
                   <!--////∑÷∏Ó-->
                           <div id="splitline"></div>
  <div id="centermiddle">
                                    <div id="newtop">
                                        <div id="new_btn" style="height:21px;">
                                                <div id="new1" class="newtopitem newtopitem1">新闻公告</div>  
                                                <div id="new2" class="newtopitem">新闻中心</div>
                                                <div class="newtopback"><a href="news.php?act=one"><img src="images/more.jpg" height="20px" border="0"></a></div>
                                        </div>
                                        <div id="newtopcontent">
                                      <!--////∑÷∏Ó ˝æ›œ‘ æø™ º-->
                                        <div id="new_1" style="margin-left: 5px; display: none; ">
                                        <!--!-->
     <ul>
							{foreach from=$newslist item=news}
								<li style="list-style-type:none;text-indent:5px;height:20px;line-height:20px;"><a href="news.php?act=view&newsId={$news.newsId}">{$news.newsTitle|truncate:18:"…":true}<p style="float:right;">{$news.newsTime|truncate:10:"":true}</p></a></li>
		 					{/foreach}
		          	</ul>                                 
                                         <!--!-->
                                         </div>
                                         <div id="new_2" style="margin-left: 10px; display: block; ">
                                        <!--!-->
                                       <ul>
							{foreach from=$newslist1 item=new}
								<li style="list-style-type:none;text-indent:5px;height:20px;line-height:20px;"><a href="news.php?act=view&newsId={$new.newsId}">{$new.newsTitle|truncate:18:"…":true}<p style="float:right;">{$new.newsTime}</p></a></li>
		 					{/foreach}
		          	</ul>
                                        
                                         <!--!-->
                                         </div>
                                         
                                          
                                               
                                       </div>
              </div>
                                      <div id="active">
                                     <div id="activetitle">图片新闻</div>
                                     <div id="activetop">
                                
                                      <div id="centerad4" class="activeitem" src="images/11.jpg" link="#">04</div>
                                       <div id="centerad3" class="activeitem" src="images/12.jpg" link="#">03</div>
                                       <div id="centerad2" class="activeitem" src="images/13.jpg" link="#">02</div>
                                       <div id="centerad1" class="activeitem activeitem1" src="images/14.jpg" link="#">01</div>
                                     </div>
                                     <div id="activeitemshow"><a href="ysjList.php" target="_blank"><img src="images/11.jpg" height="127" width="295px" border="0"></a></div>
                                                     
          </div>
                    </div>
                            <!--////∑÷∏Ó ¿œ ¶ ˝æ›ø™ º-->
	<div id="centermiddle1">
         <div id="teachertop">
         <div id="teacher_btn" style="height:21px; float:left; 
width:605px;">
        <div id="teacher1" class="teachertopitem teachertopitem1">讲师</div>
        <div id="teacher2" class="teachertopitem teachertopitem1">世界大师</div>
        <div id="teacher3" class="teachertopitem">战略合作</div>
    <div class="teachertopback"><a href="ysj.php?act=one"><img src="images/more.jpg" border="0"></a></div></div>
<div class="teachertopcontent">
<div id="teacher_1" style="width: 100%; display: none; ">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>	
	<tr>{foreach from=$ysjlist item=ysj}
	<td align="center" height="103"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" title="{$ysj.ysjTitle}"><img src="{$ysj.imgurl}" width="68" height="91" border="0"></a></td>{/foreach}
	</tr>
	<tr>{foreach from=$ysjlist item=ysj}
	<td height="24" align="center" class="fontweight"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" class="line fontweight color01">{$ysj.ysjTitle|truncate:3:"":true}</a></td>{/foreach}</tr>
							</tbody></table>
</div>

<div id="teacher_2" style="width: 100%; display: none; ">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody><tr>{foreach from=$ysjlist1 item=ysj}
<td align="center" height="103"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" title="{$ysj.ysjTitle}"><img src="{$ysj.imgurl}" width="68" height="91" border="0"></a></td>{/foreach}
</tr>
<tr>{foreach from=$ysjlist1 item=ysj}
<td height="24" align="center" class="fontweight"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" class="line fontweight color01">{$ysj.ysjTitle}</a></td>{/foreach}	</tr>
							</tbody></table>
                                                       
                                                       </div>
                                                         <div id="teacher_3" style="width: 100%; display: block; ">
                                                      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody><tr>
								{foreach from=$ysjlist2 item=ysj}
								<td align="center" height="103"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" title="{$ysj.ysjTitle}"><img src="{$ysj.imgurl}" width="68" height="91" border="0"></a></td>{/foreach}
								</tr>
								<tr>{foreach from=$ysjlist2 item=ysj}
								<td height="24" align="center" class="fontweight"><a href="ysj.php?act=view&ysjId={$ysj.ysjId}" class="line fontweight color01">{$ysj.ysjTitle}</a></td>{/foreach}</tr>
							</tbody></table>
                                                       
                                                       </div>
                                                              
                                                   </div>
                                                   
                                                
                                                
                                                        
                          </div>
                          
                          
                          
                         
                                  
                  </div>
                  <!---->
                  <div id="bottommiddle">
                                                <div id="movietop">
                                                    <div id="moviebtn" style="height:21px; float:left; 

width:605px;">
                                                              <div class="movietopitem"></div>  
                                                            <div class="movietopitem1">精彩视频</div>
                                                            <div class="movietopback"></div>
                                                            <div class="movietopmore"><a href="vedio.php?act=one"><img src="images/more.jpg" border="0"></a></div>
                                                 </div>
                                                    <div class="movietopcontent">
                                                       
                                                       
                                                         
                                                  <div style="width:100%;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody><tr>
								{foreach from=$vedio item=ysj}
								<td align="center" height="103"><a href="vedio.php?act=view&fileId={$ysj.fileId}" title="{$ysj.fileName}"><img src="{$ysj.imgurl}" width="68" height="91" border="0"></a></td>{/foreach}
								</tr>
								<tr>{foreach from=$vedio item=ysj}
								<td height="24" align="center" class="fontweight"><a href="vedio.php?act=view&fileId={$ysj.fileId}" class="line fontweight color01">{$ysj.fileName}</a></td>{/foreach}</tr>
							</tbody></table>	</div>	
                                                           
                                                   </div>

                                                                                               
                          </div>
                                  
                  </div>
                   <!--asd-->
         
                </div>
				  <div style="clear:both;"><!-- --></div>
			</div>
            
          
			<div id="bottom">
                       <!--////logo-->
              <div id="bottomsplit"></div>

              <!--////menu--><!--////Õ∑–≈œ¢--></div>
		
		</div>
	
	</div>
</div>
    
    </form>



<div id="toolTipLayer" style="position: absolute; visibility: visible; display: none; left: 708px; top: 528px; "></div>
    
            </div>
            <div id="cenright">
						<div class="nav"></div>
            	<ul>
							<li><a href="http://weibo.com/1247608224/profile?leftnav=1&wvr=3.6&mod=personinfo"><img src="images/11.jpeg" width="90" height="90"></a><p>哈尼之声</p></li>
							<li><a href="http://t.qq.com/xiaogang1644?preview"><img src="images/180.jpeg" width="90" height="90"></a><p>中国哈尼演说第一人</p></li>
		          	</ul>
		<div class="box">
      <p style="border:1px solid #ddd;height:60px;line-height:60px;">海洋之家总经理俱乐部</p>
      <p style="border:1px solid #ddd;height:60px;line-height:60px;">百领国际学员</p>
      <ul>
        <p>百连新天地学员</p>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
        <li>阿猪</li>
      </ul>
    </div>

            </div>
        </div>