<?php

mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("timo");
    
//$result=mysql_query("SELECT COUNT(*) FROM votespresident where v_id=1 ") or die (mysql_error()) ;
//$resultcount=mysql_fetch_array($result);
//$count = $resultcount;
//$result1=mysql_query("insert into resultpresident(countvotes)VALUES('$result')") or die (mysql_error());
//$data=mysql_fetch_assoc($result);
//mysql_query("UPDATE resultpresident SET countvotes = '$result1' where id=13" ) or die (mysql_error());
//$result1=mysql_query("insert into resultpresident(countvotes)VALUES('$result')") or die (mysql_error());
//mysql_query("UPDATE resultpresident SET countvotes = '$result'" ) or die (mysql_error());
 //SELECT COUNT (*)
 //echo mysql_result($result1,0);

//$result=mysql_query("SELECT COUNT(*) FROM votespresident where v_id=2 ") or die (mysql_error()) ;
//$resultcount=mysql_fetch_array($result);
//$count = $resultcount;
//$result1=mysql_query("insert into resultpresident(countvotes1)VALUES('$result')") or die (mysql_error());
//$data=mysql_fetch_assoc($result);
//mysql_query("UPDATE resultpresident SET countvotes1 = '$result1'" ) or die (mysql_error());

//$RESULT=mysql_query("SELECT(select COUNT(*)from votespresident where v_id=1)
  //                        (select COUNT(*)from votespresident where v_id=2)
	//			(select COUNT(*)from votespresident where v_id=3)")or die (mysql_error());
				//echo "$RESULT";
//SELECT `id` , v_id, COUNT( * ) `Count`
//FROM votespresident
//GROUP BY `id` , v_id
//LIMIT 0 , 30
	
	$result=mysql_query("SELECT v_id, COUNT( * ) `Count` FROM votesvetfarmmen GROUP BY v_id") or die (mysql_error());
	//mysql_query("insert into resultpresident1(v_id, count)VALUES('$result')")or die (mysql_error());
	mysql_query("INSERT INTO resultvetfarmmrn (v_id, count) SELECT v_id, COUNT( * ) `Count` FROM votesvetfarmmen GROUP BY v_id ON DUPLICATE KEY UPDATE v_id= values(v_id) ") or die (mysql_error());
	 mysql_query("UPDATE resultvetfarmmrn SET count= (SELECT  COUNT( * ) FROM votesvetfarmmen WHERE resultvetfarmmrn.v_id=votesvetfarmmen.v_id)")or die (mysql_error());
	 
	?>
	<html>
<h1 style="font-size:30;color:#0000FF;">Vetfarm men candidates</h1>
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

$query=mysql_query("SELECT * FROM vetfarmmen, resultvetfarmmrn WHERE vetfarmmen.id = resultvetfarmmrn.v_id")or die(mysql_error());

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