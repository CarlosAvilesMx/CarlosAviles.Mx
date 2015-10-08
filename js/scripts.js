//Nav dejar la nav pegada al fondo
(function ($) {
	  $(document).ready(function(){
			// hide .navbar first
			$(".navbar").hide();
			// fade in .navbar
			$(function () {
				$(window).scroll(function () {
		            // set distance user needs to scroll before we fadeIn navbar
					if ($(this).scrollTop() > 148) {
						$('.navbar').fadeIn();
					} else {
						$('.navbar').fadeOut("slow");
					}
				});
		
			
			});
		});
}(jQuery));
//Animate.css when scrolling
new WOW().init();
//Smooth scroll
	$(document).ready(function(){
		$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		    e.preventDefault();
		 
		    var target = this.hash,
		    $target = $(target);
		 
		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 500, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	});
	
//Caption Box Descripcion de los trabajos 
$(document).ready(function(){
		
			$("[rel='tooltip']").tooltip();	
		
			$('#hover-cap-4col .thumbnail').hover(
				function(){
					$(this).find('.caption').slideDown(250); //.fadeIn(250)
				},
				function(){
					$(this).find('.caption').slideUp(250); //.fadeOut(205)
				}
			);	
		
		});	