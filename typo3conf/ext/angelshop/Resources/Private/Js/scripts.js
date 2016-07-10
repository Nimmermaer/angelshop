(function($){

	$(document).ready(function(){

		$('#menu-primary>#menu-primary-items>li>a').each(function(){
	        var $this = $(this),
	            txt = $this.text();
		        $this.html('<div class="txt_menu"><span>'+ txt +'</span></div><div class="txt_menu"><span>'+ txt +'</span></div>');
		});

		$('.post_4 .even').each(function(){
			_this = $(this);
			_this.find('.post-thumbnail').insertAfter(_this.find('.post_cont'));
		});

		$(window).resize(
		   function(){

		    	$('.static-footer-sidebar5').width($(window).width());
				$('.static-footer-sidebar5').css({width: $(window).width(), 'margin-left': ($(window).width()/-2), 'left':'50%'});


				$('.custom_post').find('.post_bg').each(function(){
					_this = $(this);
					var ha = _this.height();
					_this.find('img').css({'height': ha});
				});
			
		   }

		).trigger('resize');
		

	});

 
})(jQuery);