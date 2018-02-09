;(function () {
	
	'use strict';

	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	var dropDownMenu = function() {
		
	 	$(".drop-down-menu").hover(function(){
         $(this).addClass('active');
    	},
    	function(){
        	$(this).removeClass('active');
    	});

	};

	var loaderPage = function() {
		$(".fh5co-loader").fadeOut("slow");
	};

	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};


	var owlCarouselMain = function() {
		var owl = $('.owl-carousel-main');

		owl.owlCarousel({
			items:1,
			mouseDrag: true,
			loop: true,
			margin: 0,
			responsiveClass: true,
			nav: true,
			dots: true,
			autoHeight: true,
			smartSpeed: 500,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [	
				"<i class='icon-chevron-left owl-direction'></i>",
				"<i class='icon-chevron-right owl-direction'></i>"
			]
		});

		$(window).resize(function(){
			 owl.trigger('refresh.owl.carousel');
		});
	};

	var offcanvasMenu = function() {
		$('#wrap').prepend('<div id="fh5co-offcanvas" />');
		$('#fh5co-offcanvas').append( $('#fh5co-main-nav').clone() );
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){
			var $this = $(this);

			if ( $('body').hasClass('offcanvas-visible') )  {
				$('body').removeClass('fh5co-overflow offcanvas-visible');
				$this.removeClass('active');
			} else {
				$('body').addClass('fh5co-overflow offcanvas-visible');
				$this.addClass('active');
			}

			event.preventDefault();

		});

		$('#fh5co-offcanvas').css('height', $(window).height());

		$(window).resize(function() {
			$('#fh5co-offcanvas').css('height', $(window).height());
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-fh5co-nav-toggle').removeClass('active');
		   }
		});

		$(window).scroll(function(){
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-fh5co-nav-toggle').removeClass('active');
		   }
		});

	};

	

	
	// Document on load.
	$(function(){

		dropDownMenu();
		owlCarouselMain();
		offcanvasMenu();
		burgerMenu();
		loaderPage();
		goToTop();

	});


}());




//JQuery Para los Debates.
var count = 0;
function enviar_debate(){
	var user_name = document.getElementById('user_name').value;
	var debate_name = document.getElementById('debate_name').value;
	var text_debate = document.getElementById('text_debate').value;
	
	var usuario = $('<p><b>Usuario</b></p>').append($('<p></p>').text(user_name));
	var id_debate = $('<p><b>Nombre del Debate</b></p>').append($('<p></p>').text(debate_name));
	var debate = $('<p><b>Contenido del debate</b></p>').append($('<p></p>').text(text_debate));

	var responder = $('<input type="submit" name="responder" class="btn btn-primary" onclick="responder()" value="Responder"></input>')
	var div_debate = $('<div id="div_debate'+count+'"></div>').append(usuario).append(id_debate).append(debate).append(responder).append("<hr></hr");
	$('#debates').append(div_debate);	
	$('input[name=ini_debate]').attr('disabled', 'true');
	count ++;
}

function responder(){
	var id = "#div_debate"+count+"";
	var respuesta_text = $('<textarea id="text_respuesta" cols="20" rows="5" class="form-control"></textarea>')
	var btn_respuesta = $('<input type="submit" class="btn btn-primary" onclick="enviar_respuesta()" value="Enviar"></input>')
	var respuesta = $('<div id="respuesta"><b>Responder</b></div>').append($('<p></p>').append(respuesta_text)).append(btn_respuesta);
	$('#div_debate0').after(respuesta);
	$('input[name=responder]').attr('disabled', 'true');
}

function enviar_respuesta(){
	var nombre = user_name;
	var respuesta = document.getElementById('text_respuesta').value;
	var ins_resp = $('<p><b>Tu Respuesta</b></p>').append($('<p></p>').text(respuesta));

	$('#div_debate0').append(ins_resp);
	$('input[name=responder]').removeAttr('disabled');
	$('input[name=ini_debate]').removeAttr('disabled');
	$('#respuesta').remove();
	
}

//Bootstrap input file

$("#file-3").fileinput({
			showCaption: false,
			browseClass: "btn btn-primary btn-lg",
			fileType: "any"
			});