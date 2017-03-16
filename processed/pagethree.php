<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>another try</title>
</head>
<body>

<div data-role="page" id="pageyi">

	<div data-role="header" style="background-color:#0000FF">
	<h1 style="color:#FFFFFF">线下销售3</h1>
	<a href="index.php" data-role="button" data-icon="home" data-transition="slide" data-direction="reverse">首页</a>
	<div data-role="navbar">
	<ul>
		<li><a href="#pageyi" data-icon="home">ORDER</a></li>
		<li><a href="xthree.php" data-icon="info">COUPON</a></li>
	</ul>
	</div>
	</div>
	
	<div data-role="content">
	<h2>感谢选择沃尔沃！</h2>
	<hr/><br/>
	<form method="post" action="info.php">
		<label for="fa">volvo v60</label>
		<input type="radio" name="cai" id="fa" value="v60" />
		
		<label for="fb">honda jade</label>
		<input type="radio" name="cai" id="fb" value="jade" />
		
		<label for="fc">nissan gtr</label>
		<input type="radio" name="cai" id="fc" value="gtr"/>
		
		<label for="fd">volkswagen phaeton</label>
		<input type="radio" name="cai" id="fd" value="phaeton" />
		
		<label for="fe">toyota levin</label>
		<input type="radio" name="cai" id="fe" value="levin" />
		
		<label for="ff">honda fit</label>
		<input type="radio" name="cai" id="ff" value="fit"/>
		
		<label for="fg">lexus ls</label>
		<input type="radio" name="cai" id="fg" value="lexus ls" />
		
		<input type="hidden" name="cs" id="cs" value="3"/>
		
		<input type="submit" value="提交订单"/>
		</form>
		
	</div>

	<div data-role="footer">
	<h1>fksr</h1>
	</div>


</div>

</body>
</html>