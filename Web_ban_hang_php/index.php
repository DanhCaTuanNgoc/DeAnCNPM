<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylec.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>SHOP BAN QUAN AO</title>
</head>
<body>
	<div class="wrapper">
		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");

		?>
		
	</div>  
		
</body>
<!-- <script type="text/javascript">
	/**/

$( document ).ready(function() {
		
		var back =$(".prev");
		var	next = $(".next");
		var	steps = $(".step");
		
		next.bind("click", function() { 
			$.each( steps, function( i ) {
				if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
					$(steps[i]).addClass('current');
					$(steps[i - 1]).removeClass('current').addClass('done');
					return false;
				}
			})		
		});
		back.bind("click", function() { 
			$.each( steps, function( i ) {
				if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
					$(steps[i + 1]).removeClass('current');
					$(steps[i]).removeClass('done').addClass('current');
					return false;
				}
			})		
		});

	})
</script> -->
</html>
