<html>
<head>
<title>WELCOMING NOTE</title>
</head>
<?php
ob_start();
session_start();
$conn=mysql_connect("localhost", "root", "");
$query1=mysql_select_db('incident');
if(isset($_POST['submit'])){
$u=$_POST['email'];
$p=$_POST['pass'];
if($u!="" && $p!=""){
$query=mysql_query("SELECT * FROM registration WHERE Email='".$u."'and password='".$p."' ");
$row=mysql_num_rows($query);
if($row==1){
	$_SESSION['p']=$p;
	$_SESSION['u']=$u;
	header ('location:report.php');


}else{
	echo '<script>alert("please enter correct email and password")</script>';
}
}else{
	echo '<script>alert("all fields are required")</script>';
}
echo $u;
echo $p;
}


?>
</html>