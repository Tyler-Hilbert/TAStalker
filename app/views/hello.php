<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Is the TA in the office???</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 25%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<h1>Is the TA in the office?</h1>
	<div class="welcome">
		<h1>The TA is in the office</h1>
		<img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg">
	<?php
	//var_dump(DB::table('requests')->get());
	?>	
</div>
</body>
</html>
