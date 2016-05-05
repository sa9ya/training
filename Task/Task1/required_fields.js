	$(function() {

		$('.rf').each(function(){
			var form = $(this),
				btn = form.find('.btn_submit');
			
			form.find('.rfield').addClass('empty_field');
			
			function checkInput(){
				form.find('.rfield').each(function(){
					if($(this).val() != ''){
						$(this).removeClass('empty_field');
					} else {
						$(this).addClass('empty_field');
					}
				});
form.find('.mail').each(function(){
    if($(this).val() !=''){
var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,5}\.)?[a-z]{2,4}$/i;
        if(pattern.test($(this).val())){
            						$(this).removeClass('empty_field');

        }else{
            $(this).addClass('empty_field');
        }

    }else{
        $(this).addClass('empty_field');
    }
});
                
form.find('.conf_pass').each(function (){
    if(($(this).val() !='')&&(form.find('.conf_pass').val() == form.find('.password').val())){
        $(this).removeClass('empty_field');
    }else{
        $(this).addClass('empty_field');
    }
});			}
			

			function lightEmpty(){
				form.find('.empty_field').css({'border-color':'red'});
				setTimeout(function(){
					form.find('.empty_field').removeAttr('style');
				},500);
			}
			
			setInterval(function(){
				checkInput();
				var sizeEmpty = form.find('.empty_field').size();
				if(sizeEmpty > 0){
					if(btn.hasClass('disabled')){
						return false
					} else {
						btn.addClass('disabled')
					}
				} else {
					btn.removeClass('disabled')
				}
			},500);

			btn.click(function(){
				if($(this).hasClass('disabled')){
					lightEmpty();
					return false
				} else {
					form.submit();
				}
			});
			
		});
		
	});