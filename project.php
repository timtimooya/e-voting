<html>
<head>
<title>incident reporting</title>
</head>
<body background="ima src=smart.jpg">
<form action="" method="POST">
<form>
First name:<input type="text" name="firstname" required><br><br>
Last name:<input type="text" name="lastname" required><br><br>
Password:<input type="password" name="password" required><br><br>
Confirm:<input type="password" name="cpassword" required><br><br>
Phone Number;<input type="tell" name="phone" required><br><br>
Email Address:<input type="email" name="email" required><br><br>
ID Number:<input type="numbers" name="id" required><br><br>

<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
<p>you have an account?<p><a href="projlogin.php">Login<a>
<?php
$con=mysql_connect("localhost","root","");
$querry1=mysql_select_db("incident");


if(isset($_POST['submit'])){
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];
$pn=$_POST["phone"];
$email=$_POST["email"];
$id=$_POST["id"];

if ($pass==$cpass){
$query=mysql_query("INSERT INTO registration(First_name, Last_name, password, phone_number, Email, ID_number) values('$fname', '$lname', '$pass',
'$pn', '$email','$id')") or die(mysql_error());

	
if($query){
	echo '<script>alert("Registration successful")</script>';
	
}

}else{
	echo '<script>alert("password did not match")</script>';

}
}



?>


</html>