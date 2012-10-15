{include file="header.tpl"}
<div id="cen">
        	<div id="cenleft">
            	<div id="cenleft2">
					<ul>
						<li>用户名<input type="text" name="textfield" width=150 id="textfield" style="border:1px solid #ddd"></li>
						<li>密&ensp;&ensp;码<input type="text" name="textfield2" id="textfield2" style="border:1px solid #ddd"></li>
						<li>
						  <form name="form1" method="post" action="" style="text-align:center; margin-top:15px;">
						    <input type="image" name="submit" src="images/reg.gif" >
					         <input type="image" name="submit" src="images/login.gif" >
                             <p>忘记密码 申请注册</p>
						  </form>
						</li>
					</ul>
			</div>
			<div id="cenleft3">
										<ul>
										<li><img src="images/tool1.gif"><img src="images/tool2.gif"></li>
										<li style="margin-bottom:30px;font-size:14px;">发表感想!    发表疑问?</li>
										<div class="bb"></div>
										<dl>
											<dt>超越党员之家</dt>
								<dd class="pic"><img src="images/model2.png"></dd>
								<dd class="text">党支部活动</dd>
															</dl><div class="bb"></div>
										<dl>
								<dt>人才招聘</dt>
								<dd class="pic"><img src="images/model3.png"></dd>
											<dd class="text">顶尖人才信息</dd>
												</dl><div class="bb"></div>
									   <dl>
						<dt>课程时间表</dt>
							<dd class="pic"><img src="images/model4.png"></dd>
								<dd class="text">精彩课程分享</dd>
								<dd class="text">课程图片分享</dd>
												</dl><div class="bb"></div>
										</ul>
										</div>
            </div>
            <div id="cenright1">
            <img src="images/nav.jpg">
             <div class="nav"><h1><span>首页</span>新闻中心</h1></div>
                <ul>
          				标题：{$news.newsTitle}
									文本: {$news.newsText}
									时间:{$news.newsTime}
                </ul>
                <center>第一页上一页下一页尾页</center>
            </div>
</div>
{include file="foot.tpl"}