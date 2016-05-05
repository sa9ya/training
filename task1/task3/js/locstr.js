$(document).ready(function(){
            for(var i=0; i<localStorage.length;i++){
                var key = localStorage.key(i);
                $('[src="'+key+'"]').parent().addClass('remote');
            }
});