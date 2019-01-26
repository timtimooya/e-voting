<html>
<title></title>
<?PHP
include ('experiment.php');
if(isset($_SESSION['n'])){
	//echo '<script>alert ("already logged in") </script>';
}

?>


<link rel="stylesheet"type="text/css" href= "login.css"/>
<body>
<img src="voting.jpg">
<div class="login-form">
<div class="login-face"><img src="maseno.jpg"></div>
<section class="form">
<form action='' method='POST'>
<div class="input">
username:<input type="text" name="username" placeholder="Username"> 
</div>
<div class="input">
password:<input type="password" name="password" placeholder="Password" >

<input type="submit" name="studentlogin" value="Login">
</div> 
</div>
</form>
</section>
</body>
</html>
 <?php

?>