<html>
<h1 style="font-size:30;color:#00FF00;"></h1>
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
<body bgcolor="#C0C0C0">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("timo", $con);
 
$result = mysql_query("SELECT * FROM institute");
 
echo "<table border='1'>
<tr>
<th>firstname</th>
<th>secondname</th>
<th>othername</th>
<th>regno</th>
<th>school</th>
<th>department</th>
<th>course</th>
<th>post</th>
<th>gender</th>
<th>image</th>
<th>edit</th>
<th>delete</th>

</tr>";
 
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";

  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['secondname'] . "</td>";
  echo "<td>" . $row['othername'] . "</td>";
  echo "<td>" . $row['rgno'] . "</td>";
  echo "<td>" . $row['scho'] . "</td>";
  echo "<td>" . $row['dep'] . "</td>";
  echo "<td>" . $row['course'] . "</td>";
  echo "<td>" . $row['post'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['image'] . "</td>";
     echo "<td><a href='edit.php?rgno= ". $row['rgno'] ."'>Edit</a> </td>";   
 echo "<td><a href='delete.php?rgno= ". $row['rgno'] ."'>delete</a> </td>";
  echo "</tr>";
  }
    
echo "</table>";
   
 
mysql_close($con);
?>
   