
<html>
<?PHP
include ('experiment.php');
if(isset($_SESSION['y'])){
	//echo '<script>alert ("already logged in") </script>';
}

?>
<head>
  <link  rel="stylesheet" href="../bootstrap1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<div>
username:<input type="text" name="username"><br><br>
password:<input type="password" name="password"><br><br>
<input type="submit" name="studentlogin" value="student login">
</div>


</body>
</form>
</html>


 <?php
/*
if(isset($_POST['studentlogin'])){
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("timo") or die(mysql_error());
	$n=$_POST['username'];
	$p=$_POST['password'];
	if($n!='' && $p!=''){
	$query=mysql_query("SELECT * FROM studet WHERE username='".$n."' and password='".$p."'") or die(mysql_error());
	$row=mysql_num_rows($query);
if($row){
	$_session ['loginedin']=$n;
	echo 'successfull';
	header ('location:voterscandidate1.php');
	
}
else{	
	echo"please  enter the correct username and password";
	
}

	
	
	
}else{
	echo" please input both username and password";	
		
	
	
	
	
	
	
	
	
}
}
*/
?>