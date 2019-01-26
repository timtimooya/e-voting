<html>
<body>
<link rel="stylesheet" href="slide.css"/>
<div class id="header" style="height:20%;">
<?php include 'navigation.php'; ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>

<div class="jumbotron text-center" style="background-color:lightgreen; height:350px; position:relative; top:30%;">
 <h1 style="color:purple;"> Maseno University</h1>
  <h2 style="color:purple;">Online voting system</h2>
 <?php
include('experiment.php');
$np=$_SESSION['n'];
$_SESSION['n']=$np;
echo $np;
?>
<p></p><br>
<h2><a href="t.php" style="position:relative; align:center; font-size:30px">Click to vote</a><h1>



</div>








</body>


</html>
