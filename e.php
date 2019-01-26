<html> 
<head></head>
<form action="" method="$_POST">
<div>
<input type="text" name="fnum" value="" placeholder="enter first number"><br><br>
<input type="text" name="snum" value="" placeholder="enter second number"><br><br>
<input type="submit" name="add" value="+">
<input type="submit" name="subtract" value="-"><br><br>
<input type="submit" name="multiply" value="*">
<input type="submit" name="divide" value="/">
</div>
 </html>
 <?php
 if(isset($_POST['add'])){
	 $n='fnum';
	 $m='snum';
	 echo $n+$m;
 }
 
 ?>