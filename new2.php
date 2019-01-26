<?php
$conn=mysql_connect("localhost","root","");
$creat=mysql_query("CREATE database viki");
$db=mysql_select_db("viki")or die(mysql_error);
if($db){
	echo 'database selected';
$query=mysql_query("CREATE TABLE CUSTOMERS( ID INT NOT NULL, NAME VARCHAR (20) NOT NULL, AGE INT NOT NULL, ADDRESS CHAR (25) , SALARY DECIMAL (18, 2), PRIMARY KEY (ID)" );
if($query){
	echo 'table created';
}	
}

?>