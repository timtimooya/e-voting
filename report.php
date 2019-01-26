<?php
include 'incide.php';
$cr=$_SESSION['u'];
$_SESSION['u']=$cr;
echo 'Welcome ';
echo $cr;
?>
<html>
<head>
<title>start reporting</title>
</head>
<body style="background-color:skyblue; foreground-color:maroon;" >
<div class id="container">
<h1 align="center" color="Green">Maseno university incident reporting system</h1>
<p style="foreground-color:pink; font-family:arial; font-size:22px;">Allow students to report
 the incidents that may occur around the institution. Start reporting to enjoy fast response.</p>
</div>
<a href="reportform.php">Click to report</a>

</body>
</html>
