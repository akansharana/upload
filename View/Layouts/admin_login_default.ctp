<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shine Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>backend/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>backend/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>backend/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>backend/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo BASEURL; ?>backend/images/favicon.png" />
</head>

<body>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
	<?php //echo $this->element('sql_dump'); ?>

  <!-- plugins:js -->
  <script src="<?php echo BASEURL; ?>backend/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo BASEURL; ?>backend/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo BASEURL; ?>backend/js/off-canvas.js"></script>
  <script src="<?php echo BASEURL; ?>backend/js/hoverable-collapse.js"></script>
  <script src="<?php echo BASEURL; ?>backend/js/misc.js"></script>
  <script src="<?php echo BASEURL; ?>backend/js/settings.js"></script>
  <script src="<?php echo BASEURL; ?>backend/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo BASEURL; ?>backend/js/dashboard.js"></script>
   <script src="<?php echo BASEURL; ?>backend/js/dropify.js"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript" src="jquery.sparkline.js"></script>

  <script>
    $('.wallet-1').sparkline([3, 7, 5, 6, 8, 6, 8, 6, 6, 9], {
      type: 'line',
      width: '100%',
      height: '60',
      lineWidth: 2,
      lineColor: '#f5f5f5',
      // fillColor: 'rgba(255,255,255,0.2)',
      fillColor: '#b7e2a8',
      highlightSpotColor: '#ffffff',
      highlightLineColor: '#ffffff',
      spotRadius: 3,
    });

    $('.wallet-2').sparkline([0, 13, 10, 15, 9, 15, 5, 15, 12, 10], {
      type: 'line',
      width: '100%',
      height: '60',
      lineWidth: 2,
      lineColor: '#f5f5f5',
      // fillColor: 'rgba(255,255,255,0.2)',
      fillColor: '#b7f4ff',
      highlightSpotColor: '#ffffff',
      highlightLineColor: '#ffffff',
      spotRadius: 3,
    });


    $('.wallet-3').sparkline([3, 7, 5, 6, 8, 6, 8, 6, 6, 9], {
      type: 'line',
      width: '100%',
      height: '60',
      lineWidth: 2,
      lineColor: '#f5f5f5',
      // fillColor: 'rgba(255,255,255,0.2)',
      fillColor: '#ffdbac',
      highlightSpotColor: '#ffffff',
      highlightLineColor: '#ffffff',
      spotRadius: 3,
    });


    $('.wallet-4').sparkline([3, 7, 5, 6, 8, 6, 8, 6, 6, 9], {
      type: 'line',
      width: '100%',
      height: '60',
      lineWidth: 2,
      lineColor: '#f5f5f5',
      // fillColor: 'rgba(255,255,255,0.2)',
      fillColor: '#fecfd9',
      highlightSpotColor: '#ffffff',
      highlightLineColor: '#ffffff',
      spotRadius: 3,
    });

    (function ($) {
      (function fadeNext(collection) {
        collection.eq(0).fadeIn(1000, function () {
          (collection = collection.slice(1)).length
            &&
            fadeNext(collection)
        });
      })($('.e'))
    })

    $('.utr-hide').hide();

    $('#dropDown').change(function () {
    $('.utr').hide()    
    $('#' + this.value).show();
  

    });

    
    


  </script>
</body>

</html>
