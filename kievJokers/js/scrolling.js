 
$(document).ready(function() {
$('a[href^="#"]').click(function(){
        event.preventDefault();
        var id  = $(this).attr('href'), top= $(id).offset().top, menu= document.getElementById('h_menu').offsetHeight;
    if(id == '#h_menu'){
        top;
    }
    else{
        top = top-menu;}
		$('body,html').animate({scrollTop: top}, 1500);
});
    
});