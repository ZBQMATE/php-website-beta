<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>苏联的军火库</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

<!--第一页-->

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>雷克萨斯中国</h1>
  </div>

  <div data-role="content" style="text-align:center">
    <br/><br/><br/><br/><br/>
	<p>欢迎来到雷克萨斯中国！</p>
	<p>在这里选购您的商品！</p>
	<br/><br/>
	<p>Competitive prices</p>
	<p>The best or nothing</p>
	<br/><br/>
	<a href="#pagetwo" data-role="button" data-transition="slide" data-icon="arrow-r" data-iconpos="right">开始购物！</a>
	<br/>
	<a href="#pagethree" data-role="button" data-transition="slide" data-direction="reverse">使用说明</a>
	<br/>
  </div>

  <div data-role="footer">
    <h1>Copyright@2016</h1>
	<a href="developer.php" data-role="button" class="ui-btn-right" data-icon="info" data-rel="dialog">开发者反馈</a>
  </div>
</div> 

<!--第二页-->

<div data-role="page" id="pagetwo">
  <div data-role="header">
  	<a href="#pageone" data-role="button" data-icon="home" data-transition="slide">首页</a>
    <h1>雷克萨斯中国</h1>
  </div>
  <!--
  <script>
  function openfunction()
	{
	window.location.assign("./info.php")
	}
	</script>
	-->
  <div data-role="content">
    <form method="post" action="info.php" >
	
		<div data-role="collapsible">
		<h1>Legendary super car （日本）</h1>
		
				<fieldset data-role="controlgroup">
				
				<label for="fa">Nissan GT-R Nismo</label>
				<input type="checkbox" name="fa" id="fa" value="gtr">
				
				<label for="fb">Honda NSX 2016</label>
				<input type="checkbox" name="fb" id="fb" value="nsx">
				
				<label for="fc">Lexus LFA</label>
				<input type="checkbox" name="fc" id="fc" value="lfa">
				</fieldset>
		</div>

		<div data-role="collapsible">
		<h1>American muscle</h1>
		
				<fieldset data-role="controlgroup">
				<label for="sa">Dodge Challenge SRT hellcat</label>
				<input type="checkbox" name="sa" id="sa" value="clg">
				
				<label for="sb">Ford Mustang Cobra 500</label>
				<input type="checkbox" name="sb" id="sb" value="mst">
				</fieldset>
		</div>
		
		<div data-role="fieldcontain">
		<label for="address">称谓：</label>
		<input type="text" name="xm" id="xm">
		<label for="name">公司地址：</label>
		<input type="text" name="address" id="address">
		</div>
		
		<input type="submit" value="提交订单">
		
		
	</form>
  </div>


  <div data-role="footer">
  <h1>Copyright@2016</h1>
  <a href="developer.php" data-role="button" data-icon="info" class="ui-btn-right" data-rel="dialog">开发者反馈</a>
  </div>
  
</div> 


<!--第三页-->


<div data-role="page" id="pagethree">

	<div data-role="header">
	<a href="#pageone" data-role="button" data-transition="slide" data-icon="arrow-r" class="ui-btn-right" data-iconpos="right">返回</a>
	<h1>使用说明</h1>
	</div>
	
	<div data-role="content">
	<h2>感谢选择雷克萨斯！</h2>
	<hr/><br/>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;雷克萨斯LFA是日本知名的超级跑车，素有东瀛法拉利之称。它与日产GR-R，本田NSX同为日本三大国宝级跑车。</p><br/><br/>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;详情请咨询杭州地区经销商。</p>
	</div>

	<div data-role="footer">
	<h1>Copyright@2016</h1>
	<a href="developer.php" data-role="button" data-icon="info" class="ui-btn-right" data-rel="dialog">开发者反馈</a>	
	</div>


</div>




</body>
</html>