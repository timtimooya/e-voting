<?PHP
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("qui5", $conn) or die(mysql_error());

mysql_query("SELECT Adm, (SUM( Maths ) + SUM( English ) + SUM( Kiswahili ) + SUM( Science ) + SUM( Sst )) AS Total FROM studentmarks GROUP BY Id");
mysql_query("INSERT INTO marks (Adm,Total) SELECT Adm, (SUM( Maths ) + SUM( English ) + SUM( Kiswahili ) + SUM( Science ) + SUM( Sst )) AS Total FROM studentmarks GROUP BY Id ON DUPLICATE KEY UPDATE Adm=values(Adm)");


?>
<?php
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("qui5", $conn) or die(mysql_error());



$query=mysql_query("SELECT * FROM studentmarks, marks WHERE studentmarks.Adm = marks.Adm")or die(mysql_error());


echo "<table border='1'>
<tr>

<th>Adm</th>
<th>maths</th>
<th>english</th>
<th>kiswahili</th>
<th>science</th>
<th>sst</th>
<th>marks</th>
</tr>";
 
while($row = mysql_fetch_array($query))
  {
  echo "<tr>";
  
  echo "<td>" . $row['Adm'] . "</td>";
  echo "<td>" . $row['Maths'] . "</td>";
  echo "<td>" . $row['English'] . "</td>";
   echo "<td>" . $row['Kiswahili'] . "</td>";
    echo "<td>" . $row['Science'] . "</td>";
	 echo "<td>" . $row['Sst'] . "</td>";
	 echo "<td>" . $row['Total'] . "</td>";
  echo "</tr>";
  }
  
echo "</table>";
 


?>