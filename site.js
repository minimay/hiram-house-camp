jQuery( document ).ready( function( $ ) {
	"use strict";
	
	$("#menu-utility-1").removeClass('flex-column');
	$("#menu-utility-1").addClass('flex-row');
	
	$("#menu-main-1").removeClass('flex-column');
	$("#menu-main-1").addClass('flex-row');
	
	$('#menu-main li').find('a').removeAttr('data-toggle');
});
