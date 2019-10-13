$(function(){
	$(function(){
	$(window).scroll(function(){
		if(($window).scrollTop()>100){
			$("#back-to-top").fadeIn(1500);
		}
		else{
			$("#back-to-top").fadeOut(1500);
		}
	});
	$("#back-to-top").click(function(){
		if($('html').scrollTop()){
			$('html').animate({ scrollTop:0},1000);
			return flash;
		}
		$('body').animate({ scrollTop:0},1000);
		return flash;
	});
  });
});