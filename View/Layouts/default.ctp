<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SJFX</title>
  <!-- <link rel = "icon" type = "image/png" href = "frontend_new/images/logo.png"> -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/aos.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>frontend_new/css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
	<?php //echo $this->element('sql_dump'); ?>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery-3.3.1.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery-migrate-3.0.1.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery-ui.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/popper.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/bootstrap.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/owl.carousel.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery.stellar.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery.countdown.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/bootstrap-datepicker.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery.easing.1.3.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/aos.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery.fancybox.min.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/jquery.sticky.js" type="a483a11c712b286de46e713e-text/javascript"></script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/main.js" type="a483a11c712b286de46e713e-text/javascript"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    type="a483a11c712b286de46e713e-text/javascript"></script>
  <script type="a483a11c712b286de46e713e-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script src="<?php echo BASEURL; ?>frontend_new/js/rocket-loader.min.js"
    data-cf-settings="a483a11c712b286de46e713e-|49" defer=""></script>
</body>

</html>