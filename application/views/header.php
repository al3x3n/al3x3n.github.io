<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <!-- meta -->
	  		<meta http-equiv="content-language" content="es">
	  		<meta name="encoding" charset="utf-8">

		  	<meta name="description" content="Nos especializamos en Cableado Estructurado Voz-Datos, Redes de Fibra Óptica, Telefonía Convencional, Soporte Técnico en Redes LAN, Servicio Preventivo, Instalaciones Eléctricas de Energía Regulada, Sistemas de Seguridad, CCTV.">

		  	<meta name="keywords" content="Sistemas de Seguridad, México, cisco partner, Cableado Estructurado, Voz-Datos, Fibra Optica, Telefonia, CCTV, Camaras de seguridad, Instalaciones Eléctricas, electricas, redesgesa, redes gesa, redesGesa, Redes Gesa, redes-gesa, gesa, redes, cctv, seguridad, camaras, cctv, voz datos, optica">

		  	<meta name="robots" content="Index,Follow">
		  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		  	<META NAME="author" CONTENT="Redes Gesa"> 
		  	<meta name="date" content="2018-02-14"/>
		  	<META NAME="generator" CONTENT="Php 7 SublimeText">
		  	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" >

		  	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
		  		<meta property="og:title" content="">
		  		<meta property="og:image" content="">
		  		<meta property="og:url" content="">
		  		<meta property="og:site_name" content="">
		  		<meta property="og:description" content="">

		  	<!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
		  		<meta name="twitter:card" content="summary">
		  		<meta name="twitter:site" content="">
		  		<meta name="twitter:title" content="">
		  		<meta name="twitter:description" content="">
		  		<meta name="twitter:image" content="">
		<!-- meta -->

	  	<!-- Favicon -->
	  		<link href="<?php echo $img;?>favicon-20180427125032423.ico" rel="icon">
	  	<!-- Css -->
		  	<!-- Google Fonts -->
		  		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
		  	<!-- Bootstrap CSS File -->
		  		<link href="<?php echo $lib;?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  	<!-- Libraries CSS Files -->
		  		<link href="<?php echo $lib;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
		  		<link href="<?php echo $lib;?>animate/animate.min.css" rel="stylesheet">
		  	<!-- Iconos -->
		  		<link href="<?php echo $lib;?>ionicons/css/ionicons.min.css" rel="stylesheet">
		  	<!-- Main Stylesheet File -->
		  		<link href="<?php echo $css;?>style.css" rel="stylesheet">
		  		<link href="<?php echo $css;?>estilos.css" rel="stylesheet">
		  	<!-- Fonts -->
		  		<link href="<?php echo $js;?>lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
		  		<link href="<?php echo $css;?>font-awesome.min.css" rel="stylesheet">
		  		<link href="<?php echo $js;?>toastr/build/toastr.css" rel="stylesheet"/> 
		  	<!-- coverflow -->
		  		<link href="<?php echo $lib;?>coverflow-master/css/visual.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo $lib;?>coverflow-master/css/coverflow.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo $lib;?>coverflow-master/libs/jquery-ui/themes/base/jquery.ui.core.css" rel="stylesheet"  type="text/css"/> 
			<!-- Servcios -->					
				<link href="<?php echo $css;?>agency.min.css" rel="stylesheet">
			<!-- Google Fonts -->
			  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet"> -->

			  <!-- Bootstrap CSS File -->
			  <!-- <link href="<?php echo $lib;?>bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

			  <!-- Libraries CSS Files -->
			  <!-- <link href="<?php echo $lib;?>font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->

			  <!-- Main Stylesheet File -->
			  <!-- <link href="<?php echo $css;?>style.css" rel="stylesheet"> -->
	  	<!-- Css -->
	  	<!-- Js -->
		  	<!-- Required JavaScript Libraries -->
				<script src="<?php echo $js;?>jquery.min.js"></script>
		  		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
				<script src="<?php echo $js;?>jquery.appear.js"></script>
			  	<script src="<?php echo $lib;?>jquery/jquery-migrate.min.js"></script>
			  	<script src="<?php echo $lib;?>superfish/hoverIntent.js"></script>
			  	<script src="<?php echo $lib;?>superfish/superfish.min.js"></script>
			  	<script src="<?php echo $lib;?>tether/js/tether.min.js"></script>
			  	<script src="<?php echo $lib;?>stellar/stellar.min.js"></script>
			  	<script src="<?php echo $lib;?>bootstrap/js/bootstrap.bundle.min.js"></script>
			  	<script src="<?php echo $lib;?>counterup/counterup.min.js"></script>
			  	<script src="<?php echo $lib;?>waypoints/waypoints.min.js"></script>
			  	<script src="<?php echo $lib;?>easing/easing.js"></script>
			  	<script src="<?php echo $lib;?>stickyjs/sticky.js"></script>
			  	<script src="<?php echo $lib;?>parallax/parallax.js"></script>
				<script src="<?php echo $lib;?>easing/easing.min.js"></script>
			<!-- coverflow -->
				<!-- <script src="../../libs/jquery-ui/jquery-1.10.2.js"></script> -->
				<script src="<?php echo $lib;?>coverflow-master/libs/jquery-ui/ui/jquery.ui.core.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/libs/jquery-ui/ui/jquery.ui.widget.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/libs/jquery-ui/ui/jquery.ui.effect.js"></script>

				<script src="<?php echo $lib;?>coverflow-master/libs/jquery.hammer.js"></script>

				<script src="<?php echo $lib;?>coverflow-master/tests/lib/debounce.js"></script>

				<script src="<?php echo $lib;?>coverflow-master/src/js/support.core.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/src/js/support.transform3d.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/src/js/renderer.3d.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/src/js/renderer.classic.js"></script>
				<script src="<?php echo $lib;?>coverflow-master/src/js/coverflow.js"></script>

				<script>

				$(function() {
				var $el = $( '.coverflow' ).coverflow({
							renderer : "ThreeD"
						});

					$( window ).resize( debounce( function() {
						$el.coverflow();
					}, 20, true ));
				});
				</script>
			<!-- mensajes emergentes -->
			  	<script src="<?php echo $js;?>toastr/toastr.js"></script>
			 <!--portafolio-->
	  	        <script src="<?php echo $js;?>main.js"></script>
	  	        <script src="<?php echo $lib;?>wow/wow.min.js"></script>
	  	        <script src="<?php echo $js;?>jcarousel-0.3.7/dist/jquery.jcarousel.min.js" type="text/javascript"></script>
		        <script src="<?php echo $js;?>slider-portafolio.js" type="text/javascript"></script>
		        <script src="<?php echo $js;?>lightbox2-master/dist/js/lightbox.js" type="text/javascript"></script>
				<!-- Template Specisifc Custom Javascript File -->
			  	<script src="<?php echo $js;?>custom.js"></script>
			  	<script src="<?php echo $js;?>contactform.js"></script>
			  	<script src="<?php echo $js;?>system.js"></script>
			<!-- Includes JS-->
		 		<!-- Chat -->
					<script type="text/javascript">
							$(document).ready(function(e) {
								$(function() {
									var pause = 10;
									$(document).scroll(function(e) {
										var tops = [];
											
											$('.story').each(function(index, element) {
												tops.push( $(element).offset().top - 200 );
											});
								
											var scroll_top = $(this).scrollTop();
											
											var lis = $('.nav > li');
											for ( var i=tops.length-1; i>=0; i-- ) {
												if ( scroll_top >= tops[i] ) {
													menu_focus( lis[i], i+1 );
													break;
												}
											}
									});
									$(document).scroll();
								});
							});
							/***************
							* = Menu hover *
							***************/
								jQuery(document).ready(function ($) {
									//Cache some variables
									var menu_item = $('.nav').find('li');
									
									menu_item.hover(
										function(e) {
											var icon = $(this).find('.icon');
											var left_pos = icon.offset().left - $('.nav').offset().left;
											var el_width = icon.width() + $(this).find('.text').width() + 10;
											var hover_bar = $('<div class="active-menu special-active-menu"></div>')
												.css('left', left_pos)
												.css('width', el_width)
												.attr('id', 'special-active-menu-' + $(this).data('slide') );
											$('.active-menu').after( hover_bar );
										},
										function(e) {
											$('.special-active-menu').remove();
										}
									);
								});
							function menu_focus( element, i ) {
								if ( $(element).hasClass('active') ) {
									if ( i == 6 ) {
										if ( $('.navbar').hasClass('inv') == false )
											return;
									} else {
										return;
									}
								}
								
								enable_arrows( i );
									
								if ( i == 1 || i == 6 )
									$('.navbar').removeClass('inv');
								else
									$('.navbar').addClass('inv');
								
								$('.nav > li').removeClass('active');
								$(element).addClass('active');
								
								var icon = $(element).find('.icon');
								
								var left_pos = icon.offset().left - $('.nav').offset().left;
								var el_width = icon.width() + $(element).find('.text').width() + 10;
								
								$('.active-menu').stop(false, false).animate(
									{
										left: left_pos,
										width: el_width
									},
									1500,
									'easeInOutQuart'
								);
							}
							function enable_arrows( dataslide ) {
								$('#arrows div').addClass('disabled');
								if ( dataslide != 1 ) {
									$('#arrow-up').removeClass('disabled');
								}
								if ( dataslide != 6 ) {
									$('#arrow-down').removeClass('disabled');
								}
								if ( dataslide == 3 ) {
									$('#arrow-left').removeClass('disabled');
									$('#arrow-right').removeClass('disabled');
								}
							}
						/*NEW MENU*/
					</script>
				<!-- Chat -->
				<!-- analytics -->
					<!-- Global site tag (gtag.js) - Google Analytics -->
					<script async="" src="//www.google-analytics.com/analytics.js"></script>
						<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114187810-1"></script>
						<script>
						  window.dataLayer = window.dataLayer || [];
						  function gtag(){dataLayer.push(arguments);}
						  gtag('js', new Date());
						  gtag('config', 'UA-114187810-1');
						</script>
				<!-- analytics -->
				<?php echo $includes_js;?>
			<!-- Includes JS-->
			<!-- Start of Smartsupp Live Chat script -->
			<script type="text/javascript">
				var _smartsupp = _smartsupp || {};
				_smartsupp.key = 'f6ad10e41e73528cd5b2fbbfa91ec13facd86a4c';
				window.smartsupp||(function(d) {
					var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
					s=d.getElementsByTagName('script')[0];c=d.createElement('script');
					c.type='text/javascript';c.charset='utf-8';c.async=true;
					c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
				})(document);
				</script>
		<!-- Js -->
	</head>
	<body>