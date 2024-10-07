<?php 
 session_start();
 if(!isset($_SESSION['dangNhap'])){
 	header('Location:login.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_admin.css">
    <title>Hello ADMIN</title>
</head>
<body>
		<head> <h3 class="admin_title">WELLCOME ADMIN</h3></head>
		<div class="wrapper">
		<?php
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");

		?>
		</div> 	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			thongke();
			var char = new Morris.Line({
			element: 'chart',

			xkey: 'date',
			
			ykeys: ['order','sale','quantily'],
			
			labels: ['đơn hàng','giá','số lượng đã bán']
		});

		$('.select_date').change(function(){
			var thoigian = $(this).val();
			if(thoigian == '7ngay'){
				var text = '7 ngày qua';
			}else if(thoigian == '28ngay'){
				var text = '28 ngày qua';
			}else if(thoigian == '90ngay'){
				var text = '90 ngày qua';
			}else{
				var text = '365 ngày qua';
			}
			
			$.ajax({
				url:"modules/thongke.php",
				method:"POST",
				dataType:"JSON",
				data:{thoigian:thoigian},
				success:function(data)
				{
					char.setData(data);
					$('#text-date').text(text);
				}
			});
		});

			function thongke(){
				var text='365 ngày qua';
				$.ajax({
					url:"modules/thongke.php",
					method:"POST",
					dataType:"JSON",

					success:function(data){
						char.setData(data);
						$('#text-data').text(text);
					}
				});
			}
		});
		</script>
</body>
</html>


<!--
