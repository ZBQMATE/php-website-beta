<?php
$cnt=new mysqli(localhost,root,Frank123);
if ($cnt->connect_error)
{
die("failed to connect:" . $cnt->connect_error);
}


$cdb="CREATE DATABASE general";
if ($cnt->query($cdb) === TRUE )
{
echo"database created";
}
else{
echo "database failed" . $cnt->error;
}


/*

$ctb="CREATE TABLE april
(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
namecard VARCHAR(30) NOT NULL,
address VARCHAR(60) NOT NULL,
purchase TEXT NOT NULL,
others VARCHAR(250)
)";

if ($cnt->query($ctb) === TRUE)
{
echo "table created successfully";
}
else
{
echo "failed to creat table:" . $cnt->error;
}
*/
$cnt->close();

?>