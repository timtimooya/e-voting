<html>
<head>
</head>
<body>
<form action="sign up">
<method="POST"> 
<input type="text" name="first" placeholder="FirstName"/><br><br>
<input type="text" name="last" placeholder="LastName"/><br><br>
<input type="text" name="uid" placeholder="userName"/><br><br>
<input type="text" name="password" placeholder="password"/><br><br>
<input type="submit" name="sign up">
</body>
</html>
<?php
$conn=mysql_connect("localhost","root","","emma");
$create="CREATE TABLE users (
id int(10) not null PRIMARY KEY AUTO_INCREMENT,
FirstName VARCHAR(20) NOT NULL,
LastName VARCHAR(20) NOT NULL,
Uid VARCHAR(20) NOT NULL,
Password(20) NOT NULL)";
$result=$conn->query($create, $sql);

?>