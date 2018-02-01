<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <title>Redes Gesa</title>
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <meta content="" name="keywords">
	  <meta content="" name="description">

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

	  <!-- Favicon -->
	  <link href="img/favicon.ico" rel="icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

	  <!-- Bootstrap CSS File -->
	  <link href="<?php echo $lib;?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

	  <!-- Libraries CSS Files -->
	  <link href="<?php echo $lib;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

	  <!-- Main Stylesheet File -->
	  <link href="<?php echo $css;?>style.css" rel="stylesheet">

	  <!-- =======================================================
	    Theme Name: Bell
	    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
	    Author: BootstrapMade.com
	    Author URL: https://bootstrapmade.com
	  ======================================================= -->


	  <!--Start of Zendesk Chat Script-->
			<script type="text/javascript">
			window.$zopim || (function(d, s) {
			    var z = $zopim = function(c) {
			            z._.push(c)
			            $zopim.livechat.setLanguage('es');
			        },
			        $ = z.s =
			        d.createElement(s),
			        e = d.getElementsByTagName(s)[0];
			    z.set = function(o) {
			        z.set.
			        _.push(o)
			    };
			    z._ = [];
			    z.set._ = [];
			    $.async = !0;
			    $.setAttribute("charset", "utf-8");
			    $.src = "https://v2.zopim.com/?5Ig7F8Pgo7T9G4FcLR9XZxy8Jb0wSA0D";
			    z.t = +new Date;
			    $.
			    type = "text/javascript";
			    e.parentNode.insertBefore($, e)
			})(document, "script");
			</script>
		<!--End of Zendesk Chat Script-->

		
	  	<!-- Required JavaScript Libraries -->
			<script src="<?php echo $lib;?>jquery/jquery.min.js"></script>
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
		  	<script src="<?php echo $lib;?>lockfixed/lockfixed.min.js"></script>

		  	<script src="<?php echo $js;?>toastr/toastr.js"></script>
		  	<link href="<?php echo $js;?>toastr/build/toastr.css" rel="stylesheet"/>

			<!-- <link href="../toastr.css" rel="stylesheet" type="text/css" />
			<link href="qunit/qunit.css" rel="stylesheet" type="text/css" /> -->
		<!-- Template Specisifc Custom Javascript File -->
		  	<script src="<?php echo $js;?>custom.js"></script>
		  	<script src="<?php echo $js;?>contactform.js"></script>
		  	<script src="<?php echo $js;?>system.js"></script>
		<!-- Includes JS-->
		 	<?php echo $includes_js;?>
		<!-- EndIncludes JS-->
	</head>
	<body>