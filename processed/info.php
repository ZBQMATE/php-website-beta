<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>BIG BREASTS</title>
</head>
<body>

<?php
include 'form.php';
?>

<div data-role="page">

	<div data-role="header">
	<h1>Lexus Inc</h1>
	</div>
	
	<div data-role="content">
	<h3>提交结果</h3>
	<hr/><br/>
		<span id="mlgb"><?php echo $success ; ?></span><br/>

		<span><?php echo $nullcars ; ?></span><br/>
		<span><?php echo $nullcs ; ?></span><br/>
		
		
		<script>
		var nmb = document.getElementById("mlgb").innerHTML;
		if (nmb=="订单提交成功")
		{
		window.location.assign("number.php");
		}
		
		</script>
		
	</div>

	<div data-role="footer">
	<h1>fksr</h1>
	<a href="developer.php" data-role="button" data-icon="info" class="ui-btn-right" data-rel="dialog" data-iconpos="notext">00</a>	
	</div>


</div>

</body>
</html>