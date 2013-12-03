// JavaScript Document
$.fn.popup=function(params){	
	if(!params.width || !params.height || !params.image || !params.link) return false;	
	$('body').append('<div class="jquery_popup"><a href="'+params.link+'"><img src="'+params.image+'" width="'+params.width+'" height="'+params.height+'" alt="'+params.alt+'" /></a></div>');
	var mt=(params.height/2)*-1;
	var ml=(params.width/2)*-1;
	$("#jquery_popup").css({marginTop:mt,marginLeft:ml});
}