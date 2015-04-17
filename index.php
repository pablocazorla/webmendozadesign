<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Shell</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="min/packer.php?type=css&path=css&files=reset,style"/>

	<!--[if lt IE 9]>
	<script src="js/libs/html5-3.4-respond-1.1.0.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="shell">
		<?php 
			$colors = array('#fff568','#00b62e','#0072bc','#ff3073');
			$length = count($colors);

			for($i = 0;$i < $length; $i++){
				$w = $i*100 + 400;
				echo '<div class="frame" style="background-color:' . $colors[$i] . ';"><div class="fixed"><h1>Frame ' . $i . '</h1><div class="square" style="width:' . $w . 'px"></div></div></div>';
			};
		?>
	</div>
	<script src="js/libs/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="min/packer.php?type=js&path=js&files=app"></script>
</body>
</html>