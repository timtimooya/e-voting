<?php


?>
<html>
<head>
<title>update form</title>
</head>
<h1>Registration Form</h1>
<body>
<form action="" method="POST">

<form style="position:center">
Registration number:<input type+"text" name="adm_num" placeholder="adm_num" required><br><br>
 First Name:<input type+"text" name="first_name" placeholder="first_name"required><br><br>
 Last Name:<input type+"text" name="last_name" placeholder="last_name"required><br><br>
 year of study<input type="text" name="year_study" placeholder="year_study"required><br><br>
 Subject:<input type="text" name="subject" placeholder="subject"required><br><br>
 <input type="submit" name="submit" value="submit">
 <input type="reset" name="reset" value="reset">
 </form>
 </body>
 <?php
 $con=mysql_connect("localhost", "root", "");
$mysqldb=mysql_select_db("student1");
if(isset($_POST["submit"])){
$adm_num =$_POST["adm_num"];
$first_name =$_POST["first_name"];
$last_name =$_POST["last_name"];
$year_study =$_POST["year_study"];
$subject =$_POST["subject"];
}

	$query=mysql_query("INSERT INTO data(adm_num, first_name, last_name, year_study, subject) values('$adm_num', '$first_name', '$last_name', '$year_study', '$subject')");
if($query){
	echo '<script>alert("successfully updated")</script>';
}
	else{
		echo '<script>alert("fail to update")</script>';
	}





?>
</html>
