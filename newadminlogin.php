<html>
<title></title>
<link rel="stylesheet"type="text/css" href= "style.css"/>
<body>
<div class="login-form">
<div class="login-face"><img src="maseno.jpg"></div>
<section class="form">
<form action='' method='POST'>
<div class="input">
username:<input type="text" name="username" placeholder="Username"required> 
</div>
<div class="input">
password:<input type="password" name="password" placeholder="Password" required>

<input type="submit" name="adminlogin" value="admin login">
</div> 
</div>
</form>
</section>
</body>
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