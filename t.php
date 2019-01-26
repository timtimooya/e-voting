<?php include 'navig.php'?>
<html>
<?php
include('experiment.php');
$np=$_SESSION['n'];
$_SESSION['n']=$np;
echo "Voter's Username"."<br>";
echo $np;
?>
<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">presidential candidate</h1>
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

$query=mysql_query("SELECT * FROM candidate")or die(mysql_error());

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
  

  echo "</tr>";
  }
echo "</table>";
 


?>


</form>

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

</form>


       
            

<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">Secretary general candidates</h1>
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

$query=mysql_query("SELECT * FROM secretary_general")or die(mysql_error());

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
 
</form>





<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">Director Academics candidates</h1>
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

$query=mysql_query("SELECT * FROM academics")or die(mysql_error());

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




           
</form>


<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">Hall Representative Sunrise candidates</h1>
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

$query=mysql_query("SELECT * FROM sunrise")or die(mysql_error());

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
<p style="font-size:30px; font-color:blue;">click to submit you favourite candidate
<br><input type="submit" name="submit" value="submit"><br/><br/>
<a href ="r.php"><p style="font-size:30px; left:30%">Click Here To View Results</p></a>




          
</form>
<?php
if(isset($_POST['submit'])){
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("timo") or die(mysql_error());
	$np=$_SESSION['n'];
	
	$query=mysql_query("SELECT * FROM studet WHERE username='".$np."'") or die(mysql_error());
	$row=mysql_num_rows($query);
if($row==1){
	$apvl=1;
	$qry1=mysql_query("SELECT Checker FROM studet WHERE username='".$np."' and Checker='".$apvl."'") or die(mysql_error());
	$row=mysql_num_rows($qry1);
	
	if($row==1){
		      echo'<script>alert("You have already voted")</script>';  
		
	}else{
		
	include 'validationvotespresident.php';
	include 'validation.votesvicepresident.php';
	include 'validation.votessecretary.php';
	include 'validation.votesacademics.php';
	include 'validation.votessunrise.php';
	$qry=mysql_query("UPDATE studet set Checker='".$apvl."' WHERE username='".$np."'")or die(mysql_error());
	
}}else{
	    //  xxxxxx
}
}else{
	//
}

?>

            
</html>

   