<html>
<?php
include ("validation.votesvicepresident.php");
if (isset($_SESSION['voted'])){
	//echo '<script>alert("already voted")</script>';
	//header ("location:viewresults.php");
	
}

?>
<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">Vice President candidates</h1>
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

$query=mysql_query("SELECT * FROM vicepresident")or die(mysql_error());

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
<th>please check to vote</th>
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
	 echo $row['id'];
  echo '<td><input type="radio" name=T[] value='.$row['id'].' onclick ="disable1()"/> </td>';

  echo "</tr>";
  }
echo "</table>";
 


?>

click to submit you favourite candidate
<br><input type="submit" name="submit" value="submit"><br/><br/>
<a href="result.secretarygeneral.php">result</a>


           <script>

/*function disable1()
{ if (document.getElementById("IT").checked) {
document.getElementById("CT").disabled=true;
document.getElementById("CS").disabled=true;
document.getElementById("ICT").disabled=true;}
else
{
    document.getElementById("CT").disabled=false;
    document.getElementById("CS").disabled=false;
document.getElementById("ICT").disabled=false;}
}

function disable2()
{ if (document.getElementById("CT").checked) {
document.getElementById("IT").disabled=true;
document.getElementById("CS").disabled=true;
document.getElementById("ICT").disabled=true;}
else
{
    document.getElementById("IT").disabled=false;
document.getElementById("CS").disabled=false;
document.getElementById("ICT").disabled=false;}
}

function disable3()
{ if (document.getElementById("CS").checked) {
document.getElementById("IT").disabled=true;
    document.getElementById("CT").disabled=true;
document.getElementById("ICT").disabled=true;}
else
{
document.getElementById("IT").disabled=false;
    document.getElementById("CT").disabled=false;
document.getElementById("ICT").disabled=false;}
}
           function disable4()
{ if (document.getElementById("ICT").checked) {
document.getElementById("IT").disabled=true;
    document.getElementById("CT").disabled=true;
document.getElementById("CS").disabled=true;}
else
{
document.getElementById("IT").disabled=false;
    document.getElementById("CT").disabled=false;
document.getElementById("CS").disabled=false;}
}*/

</script>
</form>
</html>