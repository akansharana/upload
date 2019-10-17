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
  <script src="<?php echo BASEURL; ?>backend/js/data-table.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
        $('#UserDetailForm').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                type: "POST",
                url:$(this).attr('action'),
                data: dados,
                success: function( data )
                {
                    alert( data );
                }
            });

            return false;
        });
    });
    </script>
  
  
     
  <!-- End custom js for this page-->

</body>

</html>
