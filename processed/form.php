<!DOCTYPE html>
<html>
<body>

<?php

	function testword($data)
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
if ($_SERVER['REQUEST_METHOD'] == 'POST' )
{
$cars=$nullcars=$zcs=$nullcs=$success="";

	if (empty($_POST["cai"]))
	{
	$nullcars="您还没有选择产品！";
	}
	else
	{
	$cars=testword($_POST["cai"]) ;
	}
	
	
	
	if (empty($_POST["cs"]))
	{
	$nullcs="表单身份报错！";
	}
	else
	{
	$zcs=testword($_POST["cs"]);
	}
		
if ($nullcars=="" and $nullcs=="")
{
	$con=new mysqli(localhost,root,mysql123,general);
	if ($con->connect_error)
	{
	die("连接服务器失败了：" . $con->connect_error);
	}
	
		$inst="INSERT INTO may (namecard, department)
		VALUES ('$cars','$zcs')";
		
		if ($con->query($inst) === TRUE)
		{
		$success="订单提交成功";
		
		}
		else
		{
		
		$success="订单提交失败" . $con->error ;
		}

}



}
?>

</body>
</html>