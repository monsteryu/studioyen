
var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";
	$j(window).scroll(function(event){
	   var st = $j(this).scrollTop();
	   	if(st<30){
	   		$j('.header').removeClass('scrolled');
	   	}else{
	   		$j('.header').addClass('scrolled');
	   	
	   }
	});
	
});
