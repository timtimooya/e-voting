
<html>
<?php
include ("validation.votesvicepresident.php");
if (isset($_SESSION['voted'])){
	//echo '<script>alert("already voted")</script>';
	//header ("location:viewresults.php");
	
}

?>
<form action="" method="POST">
<h1 style="font-size:30;color:#0000FF;">vice president candidates</h1>
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
<?php
/*if(isset($_POST['submit'])){
	$v_id=$_POST['v_id'];
	if (!empty ($_POST['T[]'])){
		$conn= mysql_connect("localhost","root","") or die (mysql_error());
        $db= mysql_select_db("timo", $conn) or die(mysql_error());
        $query=mysql_query("SELECT * FROM voter WHERE rgno='$rgno'");
		
		
		
		if(mysql_num_rows($query)>0){
			echo "this user voted before";
	}else{
		
		mysql_query("INSERT INTO votespresdident( v_id) VALUES ('$')") or die(mysql_error());
		
	}
	
	
	
}
}*/
  
if(isset($_POST['submit']))  {  

 //table name  
  $conn= mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("timo");
    
$checkbox1=$_POST['T']; 
    
$chk="";  

foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
    if($checkbox1!=''){
$ch=mysql_query("insert into votespresident (v_id) values ('$chk')"); 
	 

if($ch)  
   {  
      echo'<script>alert("Successfully applied  ")</script>'; 
       
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}else{
        echo'<script>alert("please click to vote")</script>';
    }
 
}

?>

click to submit you favourite candidate
<br><input type="submit" name="submit" value="submit"><br/><br/>\
<a href="result.vicepresident.php">Results</a>



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
   