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

<div data-role="page">

	<div data-role="header">
	<h1>Lex Inc</h1>
	</div>
	
<div data-role="content">
	<br/><br/><h3>

<span>
<?php

$cnt=new mysql(localhost,root,mysql123,general);
if ($cnt->connect_error)
{
die("unable to connect the server ". $cnt->connect_error);
}
	$nid="SELECT id FROM may ORDER BY id"
	$resut=$cnt->query('$nid');
	
	$row=$result->fetch_assoc()
	if (empty($row)) 
	{
	$ans="编号回应错误";
	}
	else
	{
	$ans=$row['id'];
	}
	
	echo "你的编号是： " . $ans ;
	
?>
</span>
</h3>
<hr/><br/>
<a href="index.php" data-role="button" data-transition="slide">确定</a>
</div>


	<div data-role="footer">
	<h1>fksr</h1>
	<a href="developer.php" data-role="button" data-icon="info" class="ui-btn-right" data-rel="dialog" data-iconpos="notext">00</a>	
	</div>




</div>
</body>
</html>