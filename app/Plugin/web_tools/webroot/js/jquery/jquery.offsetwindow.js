// JavaScript Document
/*
$("#selector").offsetwindow(2000);
*/
jQuery(function($){jQuery.fn.offsetwindow=function(){
	var $selector=$(this.selector);
	var selector=this.selector;
	var delay=arguments[0]?arguments[0]:5000;
	var current=0;
	var total=$selector.length-1;
	$(this).parent().css({width:"100%",height:"100%",position:'fixed',top:'0px',left:'0px'});
	$(this).css({position:'absolute',top:'0px',left:'0px'});
	$(window).bind('resize load',function(){
		var offset={}
		offset.width=$(window).width()/$selector.width();
		offset.height=$(window).height()/$selector.height();
		offset.div=Math.max(offset.width,offset.height);
		offset.px=Math.ceil($selector.width()*offset.div);
		offset.py=Math.ceil($selector.height()*offset.div);
		offset.x=Math.ceil(($(window).width()/2)-(offset.px/2));
		offset.y=Math.ceil(($(window).height()/2)-(offset.py/2));
		$selector.css({top:offset.y+"px",left:offset.x+"px",width:offset.px+"px",height:offset.py+"px"});
	});
}});