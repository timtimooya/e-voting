<html>
<form action='' method='POST'>
username:<input type="text" name="username">
password:<input type="password" name="password">
<input type="submit" name="adminlogin" value="admin login">

</form>
</html>
<?php
if(isset($_POST['adminlogin'])){
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("timo") or die(mysql_error());
	$n=$_POST['username'];
	$p=$_POST['password'];
	if($n!='' && $p!=''){
	$query=mysql_query("SELECT * FROM admin WHERE username='".$n."' and password='".$p."'") or die(mysql_error());
if($query){
	
	header ('location:admintoregstudent.php');
	
}
else{	
	echo"FAILED";
	
}

	
	
	
}else{
	echo" please input both username and password";	
		
	
	
	
	
	
	
	
	
}
}
?>