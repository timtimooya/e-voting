<html>

<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">women details</h1>
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
<body bgcolor="lightgray">
<?php
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("robca", $conn) or die(mysql_error());

$query=mysql_query("SELECT * FROM users where no >= 2 and gender = 0")or die(mysql_error());


echo "<table border='1'>
<tr>

<th>firstname</th>
<th>secondname</th>
<th>surname</th>
<th>occupation</th>
<th>year of birth</th>
</tr>";
 
while($row = mysql_fetch_array($query))
  {
  echo "<tr>";
  
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['secondname'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
	 echo "<td>" . $row['occupation'] . "</td>";
	 echo "<td>" . $row['date'] . "</td>";
	 
  echo "</tr>";
  }
  
echo "</table>";
 


?>



          
</form>
            
</html>
   