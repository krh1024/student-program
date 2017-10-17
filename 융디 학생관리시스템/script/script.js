$(".mainmenu>li").click(function(){
	$(this).children(".submenu").stop().slideDown();
});

$(".btn.join").click(function (){
	$("#modal").addClass("active");
});
$("#modal button").click(function (){
	$("#modal").removeClass("active");
});
