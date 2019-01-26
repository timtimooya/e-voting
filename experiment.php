<?php
ob_start();
session_start ();

if(isset($_POST['studentlogin'])){
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("timo") or die(mysql_error());
	$n=$_POST['username'];
	$p=$_POST['password'];
	
	if($n!='' && $p!=''){
	$query=mysql_query("SELECT * FROM studet WHERE username='".$n."'and password='".$p."'") or die(mysql_error());
	$row=mysql_num_rows($query);
if($row==1){
	$_SESSION['p']=$p;
	$_SESSION['n']=$n;
	
	header ('location:voterscandidate1.php');
	
}
else{	
	//echo"please  enter the correct username and password";
	 echo'<script>alert("please  enter the correct username and password")</script>';
	
}

	
	
	
}else{
	//echo" please input both username and password";	
	echo'<script>alert("please input both username and password")</script>';	
	
	
	
	
echo $n;
  echo $p;	
	
	
}
}

?>

	