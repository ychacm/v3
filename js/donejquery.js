// JavaScript Document
$(document).ready(function(){
//Larger thumbnail preview 
 var startIndex = 0;
 var pause=false;
 function scrollTopHome(){
  if(pause) return;
  startIndex += 1;
  if(startIndex > 5){startIndex = 1;}
   showad(startIndex);
 
 } 

 setInterval(scrollTopHome,3000);
 

 function showad(startIndex)
 {
	 ////
	    cleanalleffect();
	     /////
	    $("#thumb"+startIndex).css({'z-index' : '10'});
		$("#thumb"+startIndex).find('img').addClass("hover").stop().animate({
		marginTop: '-65px', 
		marginLeft: '-60px', 
		top: '50%', 
		left: '50%', 
		width: '125px', 
		height: '125px',
		padding: '2px' 
		
	}, 200);
	 /////
	 var mainImage = $("#thumb"+startIndex+" a").attr("href"); //Find Image Name
   var mainhref= $("#thumb"+startIndex+" a").attr("src"); //Find href Name
     $("#pagecentertop img").attr({ src: mainImage });
     $("#pagecentertop a").attr({ href: mainhref });
     return false;	
 }
function cleanalleffect()
{
	 for (var i=1;i<=5;i++)
	 {
		$("#thumb"+i).css({'z-index' : '0'});
		$("#thumb"+i).find('img').removeClass("hover").stop().animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '0', 
			left: '0', 
			width: '110px', 
			height: '110px', 
			padding: '5px'
		}, 400);
	 }
}

$("#centerbanner div").hover(function() {
pause=true;
cleanalleffect();
startIndex = $(this).attr("id").replace("thumb","");
//alert(startIndex);
$(this).css({'z-index' : '10'});
$(this).find('img').addClass("hover").stop()
.animate({
	    marginTop: '-65px', 
		marginLeft: '-60px', 
		top: '50%', 
		left: '50%', 
		width: '125px', 
		height: '125px',
		padding: '2px' 
		
	
}, 200);
} , function() {
pause=false;
$(this).css({'z-index' : '0'});
$(this).find('img').removeClass("hover").stop()
.animate({
	marginTop: '0', 
	marginLeft: '0',
	top: '0', 
	left: '0', 
	width: '110px', 
	height: '110px', 
	padding: '5px'
}, 400);
});
//Swap Image on Click
$("#centerbanner div a").click(function() {
var mainImage = $(this).attr("href"); //Find Image Name
var mainhref = $(this).attr("src"); //Find Image Name
$("#pagecentertop img").attr({ src: mainImage });
$("#pagecentertop a").attr({ href: mainhref });
return false;		
});


////
$("#teacher_2").hide();
$("#teacher_3").hide();
$("#teacher_btn div").hover(function() {
		
	if( $(this).attr("class")!="teachertopback")
	{
		 for (var i=1;i<=3;i++){
			$("#teacher"+i).addClass("teachertopitem1");
			$("#teacher_"+i).hide();
			$("#"+$(this).attr("id").replace("teacher","teacher_")).show();
		}
		$(this).removeClass("teachertopitem1")
		$(this).addClass("teachertopitem")
		
	}
} , function() {
if( $(this).attr("class")!="teachertopback")
{
	$("#teacher"+i).addClass("teachertopitem");
	$("#teacher_"+i).show();
$(this).addClass("teachertopitem1")
$(this).removeClass("teachertopitem")
}
});

/////
////
$("#new_2").css('display','none');
$("#new_btn div").hover(function() {
		
	if( $(this).attr("class")!="newtopback")
	{
		 for (var i=1;i<=2;i++){
			$("#new"+i).addClass("newtopitem1");
			$("#new_"+i).hide();
			$("#"+$(this).attr("id").replace("new","new_")).show();
		}
		$(this).removeClass("newtopitem1")
		$(this).addClass("newtopitem")
		
	}
} , function() {
if( $(this).attr("class")!="newtopback")
{
	$("#new"+i).addClass("newtopitem");
	$("#new_"+i).show();
$(this).addClass("newtopitem1")
$(this).removeClass("newtopitem")
}
});


	var c_startIndex = 0;
	var c_pause=false;
	var c_count=0
	
	function c_cleanalleffect()
	{	
		for (var i=1;i<=c_count;i++)
		{
		$("#centerad"+i).removeClass("activeitem1");
		}
	}
	function scrollcenter(){
		c_count=0
		$("#activetop div").each(function() {
		c_count ++;	
		})
		if(c_pause) return;
		c_startIndex += 1;
		if(c_startIndex > c_count){c_startIndex = 1;}
		c_showad(c_startIndex)
	} 
	setInterval(scrollcenter,5000);
	function c_showad(startIndex)
	{
		////
		c_cleanalleffect();
		 /////
		$("#centerad"+startIndex).addClass("activeitem1");

	     var mainImage = $("#centerad"+startIndex).attr("src"); //Find Image Name
	     	var mainlink=$("#centerad"+startIndex).attr("link"); 
			$("#activeitemshow a").attr({ href:mainlink });
	     $("#activeitemshow img").attr({ src: mainImage });
	return false;	
	}
	//////////////
	$("#activetop div").hover(function() {
											c_pause=true;
											c_cleanalleffect();
											$(this).addClass("activeitem1");
											var mainImage =$(this).attr("src"); 
											var mainlink=$(this).attr("link"); 
											$("#activeitemshow a").attr({ href:mainlink });
											$("#activeitemshow img").attr({ src:mainImage });
	} , function() {
											c_pause=false;
											//$(this).removeClass("activeitem1");	
	});
	
	///////
		//////////////
	$("#pageleftdetail div").hover(function() {
	                                      
											
											$(this).removeClass("pageleftdetailmenu2");	
											$(this).addClass("pageleftdetailmenu1");
											$(this).find("img").attr({ src:"/images/detailtop2.gif"});
										
	} , function() {
											
											$(this).removeClass("pageleftdetailmenu1");	
											$(this).addClass("pageleftdetailmenu2");
												$(this).find("img").attr({ src:"/images/detailtop1 .gif"});
	});
	///////调用注册页面
	show_reg();

	////////
	
//
    show_error()

});

////////错误信息返回
var editparam;
var type=false;
function show_error() { 
  
   var url=this.location.href;
    var urlString = /regerror|loginerror|editprofile/g;
    var urlType = url.match(urlString);
    if (urlType=="regerror"){
      TB_show("111","/register.html?height=250;width=400")
       type=false;
    }
    else if (urlType=="loginerror"){
      //TB_show("111","/profile_edit.aspx?height=200;width=400")
    }
      else if (urlType=="editprofile"){
      TB_show("111","/userprofile.html?height=250;width=400")
      	var queryString = url.replace(/^[^\?]+\??\w{11}&?/,'');
        editparam = parseQuery( queryString );
        type=true;
    }
}


// function for adding Thickbox to elements of class .thickbox
// wrapped by Christian Montoya for uses other than $(document).ready
function show_reg(caption, url) { 

	$("a.reg").click(function(){
    var t = this.title;
    TB_show(t,this.href);
    this.blur();
    return false;
    });

}

function TB_show(caption, url) { //function called when the user clicks on a thickbox link
	try {
		$("body")
		.append("<div id='TB_overlay'></div><div id='TB_window'></div>");
		$("#TB_overlay").css("opacity","0.6");
		$("#TB_overlay").css("filter","alpha(opacity=60)");
		$("#TB_overlay").css("-moz-opacity","0.6");
		$(window).resize(TB_position);
		$("body").append("<div id='TB_load'><div id='TB_loadContent'></div></div>");
		$("#TB_overlay").show();
		var urlString = /.jpg|.jpeg|.png|.gif|.html|.aspx|.htm/g;
		var urlType = url.match(urlString);
		
		if(urlType == '.jpg' || urlType == '.jpeg' || urlType == '.png' || urlType == '.gif'){//code to show images

			var imgPreloader = new Image();
			imgPreloader.onload = function(){

			// Resizing large images added by Christian Montoya
			var de = document.documentElement;
			var x = (self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth) - 50;
			var y = (self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight) - 80;
			if(imgPreloader.width > x) { 
				imgPreloader.height = imgPreloader.height * (x/imgPreloader.width); 
				imgPreloader.width = x; 
				if(imgPreloader.height > y) { 
					imgPreloader.width = imgPreloader.width * (y/imgPreloader.height); 
					imgPreloader.height = y; 
				}
			} 
			else if(imgPreloader.height > y) { 
				imgPreloader.width = imgPreloader.width * (y/imgPreloader.height); 
				imgPreloader.height = y; 
				if(imgPreloader.width > x) { 
					imgPreloader.height = imgPreloader.height * (x/imgPreloader.width); 
					imgPreloader.width = x;
				}
			}
			// End Resizing

			TB_WIDTH = imgPreloader.width + 30;
			TB_HEIGHT = imgPreloader.height + 60;
			$("#TB_window").append("<img id='TB_Image' src='"+url+"' width='"+imgPreloader.width+"' height='"+imgPreloader.height+"' alt='"+caption+"'/>"+ "<div id='TB_caption'>"+caption+"</div><div id='TB_closeWindow'><a href='#' id='TB_closeWindowButton'>关闭</a></div>"); 
			$("#TB_closeWindowButton").click(TB_remove);
			$("#TB_Image").click(TB_remove); // close when image clicked added by Christian Montoya
			TB_position();
			$("#TB_load").remove();
			$("#TB_window").slideDown("normal");
			}
	  
			imgPreloader.src = url;
		}
		
		if(urlType == '.htm' || urlType == '.html'|| urlType =='.aspx'){//code to show html pages
			
			var queryString = url.replace(/^[^\?]+\??/,'');
			//alert(queryString);
			var params = parseQuery( queryString );
			
			TB_WIDTH = (params['width']*1) + 30;
			TB_HEIGHT = (params['height']*1) + 40;
			ajaxContentW = TB_WIDTH - 30;
			ajaxContentH = TB_HEIGHT - 45;
			$("#TB_window").append("<div id='TB_closeAjaxWindow'><a href='#' id='TB_closeWindowButton'>关闭</a></div><div id='TB_ajaxContent' style='width:"+ajaxContentW+"px;height:"+ajaxContentH+"px;'></div>");
			$("#TB_closeWindowButton").click(TB_remove);
			$("#TB_ajaxContent").load(url, function(){
			TB_position();
			$("#TB_load").remove();
			$("#TB_window").slideDown("fast");
			if (type)
			{
			   $("#name").val(editparam["name"]);
			  $("#telphone").val(editparam["telphone"]);
			    $("#email").val(editparam["email"]);
			
			}
			});
		}
		
	} catch(e) {
		alert( e );
	}
}

//helper functions below

function TB_remove() {
	// #TB_load removal added by Christian Montoya; solves bug when overlay is closed before image loads
	$("#TB_window").fadeOut("fast",function(){$('#TB_window,#TB_overlay,#TB_load').remove();}); 
	return false;
}

function TB_position() {
	var de = document.documentElement;
	var w = self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
	var h = self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
  
  	if (window.innerHeight && window.scrollMaxY) {	
		yScroll = window.innerHeight + window.scrollMaxY;
	} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
		yScroll = document.body.scrollHeight;
	} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
		yScroll = document.body.offsetHeight;
  	}
	
	$("#TB_window").css({width:TB_WIDTH+"px",height:TB_HEIGHT+"px",
	left: ((w - TB_WIDTH)/2)+"px", top: ((h - TB_HEIGHT)/2)+"px" });
	$("#TB_overlay").css("height",yScroll +"px");
}

function parseQuery ( query ) {
   var Params = new Object ();
   if ( ! query ) return Params; // return empty object
   var Pairs = query.split(/[;&]/);
   for ( var i = 0; i < Pairs.length; i++ ) {
      var KeyVal = Pairs[i].split('=');
      if ( ! KeyVal || KeyVal.length != 2 ) continue;
      var key = unescape( KeyVal[0] );
      var val = unescape( KeyVal[1] );
      val = val.replace(/\+/g, ' ');
      Params[key] = val;
   }
   return Params;
}
