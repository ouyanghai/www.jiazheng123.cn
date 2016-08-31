var LIST_LI = 1;
var LIST_LI_TOTAL = 2;
$(function(){
	$(".banner_list li").eq(0).css("z-index",1).css("opacity",1);
	$(".round a").eq(0).css("background-color","#fb4472");
	$(".cur").parent().css("display",'block');
	setInterval(function(){
		listGo();
		LIST_LI = LIST_LI>=LIST_LI_TOTAL-1 ? 0 : LIST_LI+1;
	},3000);
	$(".banner_list,.banner_arrow").mouseover(function(){
		$(".banner_arrow").css("display","block");
	}).mouseout(function(){
		$(".banner_arrow").css("display","none");
	});
	$(".banner_arrow .arrow_prev").click(function(){
		LIST_LI = LIST_LI<=0 ? LIST_LI_TOTAL-1 : LIST_LI-1;
		listGo();
	});
	$(".banner_arrow .arrow_next").click(function(){
		LIST_LI = LIST_LI>=LIST_LI_TOTAL-1 ? 0 : LIST_LI+1;
		listGo();
	});
	$(".round a").click(function(){
		var index = $(this).index();
		LIST_LI = index;
		listGo();
	});
	$(".optgroup span").click(function(){
		var ul = $(this).parent().find('ul');
		if(ul.css("display") == 'none'){
			ul.css("display",'block');	
		}else{
			ul.css("display",'none');
		}
		
	});
	$(".mobile_erwei").mouseover(function(){
		$(".erwei").css("display",'block');
	}).mouseout(function(){
		$(".erwei").css("display",'none');
	})

});
function listGo(){
	$(".banner_list li").css("z-index",0).css("opacity",0);
	$(".round a").css("background-color","#e2e2e2");

	$(".banner_list li").eq(LIST_LI).css("z-index",1).css("opacity",1);
	$(".round a").eq(LIST_LI).css("background-color","#fb4472");
}