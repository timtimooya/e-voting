<?php

mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("timo");
    

	$result=mysql_query("SELECT v_id, COUNT( * ) `Count` FROM votessunrise GROUP BY v_id") or die (mysql_error());
	//mysql_query("insert into resultpresident1(v_id, count)VALUES('$result')")or die (mysql_error());
	mysql_query("INSERT INTO resultsunrise (v_id, count) SELECT v_id, COUNT( * ) `Count` FROM votessunrise GROUP BY v_id ON DUPLICATE KEY UPDATE v_id= values(v_id)") or die (mysql_error());
	mysql_query("UPDATE resultsunrise SET count= (SELECT  COUNT( * ) FROM votessunrise WHERE resultsunrise.v_id=votessunrise.v_id)")or die (mysql_error()); 
	 
	?>
	<html>
<h1 style="font-size:30;color:#0000FF;">sunrise candidates</h1>
<head>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:pink;
}
</style>
</head>
<body bgcolor="#00FFFF">
<?php
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());

$query=mysql_query("SELECT * FROM sunrise, resultsunrise WHERE sunrise.id = resultsunrise.v_id")or die(mysql_error());

//$result=mysql_query("SELECT v_id, COUNT( * ) `Count` FROM votespresident GROUP BY v_id") or die (mysql_error());

echo "<table border='1'>
<tr>
<th>image</th>
<th>id</th>
<th>firstname</th>
<th>secondname</th>
<th>othername</th>
<th>scho</th>
<th>course</th>
<th>rgno</th>
<th>gender</th>
<th>total number of votes casted</th>
</tr>";
 
while($row = mysql_fetch_array($query))
  {
  echo "<tr>";
  echo "<td><img src='uploads/".$row['path']."'></td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['secondname'] . "</td>";
  echo "<td>" . $row['othername'] . "</td>";
   echo "<td>" . $row['scho'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
	 echo "<td>" . $row['rgno'] . "</td>";
	 echo "<td>" . $row['gender'] . "</td>";
	 	 echo "<td>" . $row['count'] . "</td>";
  echo "</tr>";
  }
  
echo "</table>";
 


?>



</form>
            
</html>