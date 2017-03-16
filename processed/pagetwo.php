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
	<h1 style="color:#FFFFFF">线下销售2</h1>
	<a href="index.php" data-role="button" data-icon="home" data-transition="slide" data-direction="reverse">首页</a>
	<div data-role="navbar">
	<ul>
		<li><a href="#pageyi" data-icon="home">ORDER</a></li>
		<li><a href="xtwo.php" data-icon="info">COUPON</a></li>
	</ul>
	</div>
	</div>
	
	<div data-role="content">
	<h2>感谢选择雷克萨斯！</h2>
	<hr/><br/>
	<form method="post" action="info.php">
		<label for="fa">cadillac ct6</label>
		<input type="radio" name="cai" id="fa" value="ct6" />
		
		<label for="fb">honda accord</label>
		<input type="radio" name="cai" id="fb" value="accord" />
		
		<label for="fc">nissan teana</label>
		<input type="radio" name="cai" id="fc" value="teana"/>
		
		<label for="fd">volkswagen gti</label>
		<input type="radio" name="cai" id="fd" value="gti" />
		
		<label for="fe">toyota highlander</label>
		<input type="radio" name="cai" id="fe" value="highlander" />
		
		<label for="ff">honda nsx</label>
		<input type="radio" name="cai" id="ff" value="nsx"/>
		
		<label for="fg">lexus rc</label>
		<input type="radio" name="cai" id="fg" value="lexus rc" />
		
		<input type="hidden" name="cs" id="cs" value="2"/>
		
		<input type="submit" value="提交订单"/>
		</form>
		
	</div>

	<div data-role="footer">
	<h1>fksr</h1>
	</div>


</div>

</body>
</html>