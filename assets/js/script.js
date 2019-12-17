$(document).ready(function(){
		$(".init-navbar-z").sideNav({
            edge: 'right',
            draggable: true,
        });
        $('.portfolio-grid').masonry({
            // options...
            itemSelector: '.portfolio-card',
            // columnWidth: 200
        });
        $('.fitur-grid').masonry({
            // options...
            itemSelector: '.fitur-card',
            // columnWidth: 200
        });

        $('.fitur-mh').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

        // $('select').material_select();

        // $('#toggle').click(function () {
        //     $(this).toggleClass('active');
        //     $('#overlay').toggleClass('open');
        //     $('body').css({"overflow":"hidden"});
        // });
        
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
        $('.parallax').parallax();
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "zoom",
                "slideShow",
                "download",
                "close"
            ],
            animationEffect: "zoom-in-out",
            transitionEffect: "zoom-in-out",
        });

        $('.modal').modal();

        var owltesti = $("#testi").owlCarousel({
        	items:2,
        	loop:true,
        	autoplay:true,
        	autoHeight: true,
	        autoplayHoverPause:false,
	        responsiveClass: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:2
		        }
		    }
        });

	    $(".testi-next").click(function() {
	        owltesti.trigger('next.owl.carousel');
	    });

	    $(".testi-prev").click(function() {
	        owltesti.trigger('prev.owl.carousel');
	    });

	    var owlport = $("#portofolio").owlCarousel({
        	items:2,
        	margin:10,
        	loop:true,
        	autoplay:true,
        	autoHeight: true,
	        autoplayHoverPause:false,
	        responsiveClass: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:2
		        }
		    }
        });

        var owlgalery = $("#gallery").owlCarousel({
        	items:3,
        	margin:10,
        	loop:true,
        	autoplay:true,
        	autoHeight: true,
	        autoplayHoverPause:false,
	        responsiveClass: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:3
		        }
		    }
        });

        var owlrebana = $("#rebana").owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoHeight: true,
            autoplayHoverPause:false,
            responsiveClass: true,            
        });

        AOS.init();
        
});