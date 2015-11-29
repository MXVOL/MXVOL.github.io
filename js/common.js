
(function($) {
	"use strict";

	$(window).load(function(){
		mainBg();
		loader();
	});

	$(document).ready(function() {
		notifyMeForm();
	});
	
	$(window).resize(function() {
		mainBg();
	});

})(jQuery);

function loader(){
    $(".page-loader-wrapper").fadeOut(800);
}

function loaderIn(){
	$(".page-loader-wrapper").addClass("pg-loader");
    $(".page-loader-wrapper").fadeIn(200);
}

function mainBg(){
	var path = $(".single-image .background").attr("data-image");
	if($("body").hasClass("single-image")){
		$(".single-image .background").css({
			"background-image" : "url("+path+")"
		});	
	}else{
		return false;
	}
}

function notifyMeForm(){
	$("#notifyMe #submit").on( "click", function() {
		 "use strict";
	    $("#notifyMe").notifyMe();
	    $("#notifyMe .error-text").delay(2000).fadeOut(2000);
	});
}
