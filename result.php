<?php 
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());

	
	$query = "update votespresident set v_id= V_id+1 where V_id=1" or(mysql_error() ;
	
	$timo = mysql_query($db, $query);
	
	if($timo){
	
	echo "<h2 align='center'>Your Vote Has Been Cast to Sachin Tendulkar!</h2>"; 
	echo "<h2 align='center'><a href='voting.php?results'>View Results</a></h2>";
	
	
	

}
?>