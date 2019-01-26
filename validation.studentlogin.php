<?php
session_start();
if(isset($_POST['studentlogin'])){
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("timo") or die(mysql_error());
	$n=$_POST['username'];
	$p=$_POST['password'];
	if($n!='' && $p!=''){
	$query=mysql_query("SELECT * FROM studet WHERE username='".$n."' and password='".$p."'") or die(mysql_error());
	$row=mysql_num_rows($query);
if($row==1){
	
	echo 'successfull';
	//header ('location:admintoregstudent.php');
	
}
else{	
	echo"wrong password and username or please register to login";
	
}

	
	
	
}else{
	echo" please input both username and password";	
		
	
	
	
	
	
	
	
	
}
}
?>