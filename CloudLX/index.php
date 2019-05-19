<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link  href="css/style.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<div id="wrapper">
			<h1>CloudLX Services<h1>
			<p></p>
			<button id="more">More Details</button>
			<script type="text/javascript">
				$(document).ready(function(){
					$.ajax({
						type: 'POST',
						url: 'connect.php',
						success: function(data) {
							var i = data;
							$.ajax({
								type: 'POST',
								url: 'show.php?access='+i,
								success: function(data) {
									$("p").text(data);
								}
							});
						}
					});	
					
					$("#more").click(function(){
						$.ajax({
							type: 'POST',
							url: 'connect.php',
							success: function(data) {
								var i = data;
								$.ajax({
									type: 'POST',
									url: 'showdetails.php?access='+i,
									success: function(data) {
										$("p").text(data);
									}
								});
							}
						});
					});
					
				});
			</script>
		</div>
	</body>

<html>