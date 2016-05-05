$(document).ready(function(){
	
	$("img").click(function(){
	  	var img = $(this);
		var src = img.attr('src');
		$("body").append(
            
            
            "<div class='zoom'>"+
            "<div class='zoom_bg'></div>"+
            '<div class="hide" onclick="this.parentNode.remove(this.parentNode)" title="Закрыть" '+
            '>×</div>'+
            "<img src="+src+" class='zoom_img' />"+
            "</div>");
		$(".zoom").fadeIn(500);
		$(".hide").click(function(){  
			$(".zoom").fadeOut(500);
			setTimeout(function(){
			  $(".zoom").remove();
			}, 800);
		});
	});
});