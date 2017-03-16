<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>cuminside</title>
<script>
function reloadme()
{
location.reload();
}
</script>
</head>
<body>

<div data-role="page" id="pagethree">

	<div data-role="header">
	
	<h1>使用说明</h1>
	</div>
	
	<div data-role="content">
	<h2>感谢选择我公司！</h2>
	<hr/><br/>
	<span><?php
	$conn=new mysqli(localhost,zjwdb_517679,Frank123,zjwdb_517679);
	if ($conn->connect_error)
	{
	die("连接服务器失败了：" . $conn->connect_error);
	}
	
		$readit="SELECT id, namecard, department FROM may WHERE id>1";
		$result =$conn->query($readit);
		
		if ($result->num_rows > 0) 
		{
   
    	while($row = $result->fetch_assoc()) 
		{
        echo "<br> 编号: ". $row["id"]. " 货物名称: ". $row["namecard"]. "出货台号： " . $row["department"];
    	}
		} 
		else 
		{
    	echo "0 results";
		}
	
	?></span>
	<button type="button" onClick="reloadme()">刷新页面</button>
	
	</div>

	<div data-role="footer">
	<h1>fksr</h1>
	<a href="developer.php" data-role="button" data-icon="info" class="ui-btn-right" data-rel="dialog" data-iconpos="notext">00</a>	
	</div>


</div>

</body>
</html>