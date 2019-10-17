<html lang="en">
  <head>
    <title>Demo example on Read excel file and import data into MySQL database using PHPExcel | Mitrajit's Tech Blog</title>
	<script src="js/jquery.min.js"></script>
  </head>
  <body>
	<style>
	span { clear:both; display:block; margin-bottom:30px; }
	span a { font-weight:bold; color:#0099FF; }
	
	

	table { border:1px solid #ccc; color:#fff; margin-top:20px; }
	table th {
		background-color:#0099FF;
		color:#fff;
	}
	td {
		background-color:#00CCFF;
		height:15px;
		text-align:center;
	}
	
	span.msg {
		display:block;
		margin-top:20px;
	}
	h4 {
		border-bottom:1px solid #000;
		margin-top:30px;
	}
	</style>
	<body>
		
		<div class="wrapperDiv">
			<form  method="post" enctype="multipart/form-data">
				Upload excel file : 
				<input type="file" name="data['user_detail']['name']" value="" />
				<input type="submit" name="submit" value="Upload" />
			</form>
                </div>
        </body>
</html>
