<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>another try</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<div data-role="page" id="pageyi">

	<div data-role="header" style="background-color:#0000FF">
	<h1 style="color:#FFFFFF">线下销售1</h1>
	<a href="index.php" data-role="button" data-icon="home" data-transition="slide" data-direction="reverse">首页</a>
	<div data-role="navbar">
	<ul>
		<li><a href="#pageyi" data-icon="home">ORDER</a></li>
		<li><a href="xone.php" data-icon="info">COUPON</a></li>
	</ul>
	</div>
	</div>
	
	<div data-role="content">
	<h2>我是爸爸顶顶顶顶顶顶！</h2>
	<hr/><br/>
	<form method="post" action="info.php">
		<label for="fa">toyota camry</label>
		<input type="radio" name="cai" id="fa" value="camry" />
		
		<label for="fb">honda civic</label>
		<input type="radio" name="cai" id="fb" value="civic" />
		
		<label for="fc">nissan versa</label>
		<input type="radio" name="cai" id="fc" value="versa"/>
		
		<label for="fd">volkswagen golf</label>
		<input type="radio" name="cai" id="fd" value="golf" />
		
		<label for="fe">toyota crown</label>
		<input type="radio" name="cai" id="fe" value="crown" />
		
		<label for="ff">honda crosstour</label>
		<input type="radio" name="cai" id="ff" value="crosstour"/>
		
		<label for="fg">lexus gs</label>
		<input type="radio" name="cai" id="fg" value="lexus gs" />
		
		<input type="hidden" name="cs" id="cs" value="1"/>
	
		<!--<input type="hidden" name="ds" id="ds" value="javascript:x=request.getRemoteAddr()" />-->
		
		
		<input type="submit" value="提交订单"/>
		</form>
		
	</div>

	<div data-role="footer">
	<h1>fksr</h1>
	</div>


</div>

</body>
</html>