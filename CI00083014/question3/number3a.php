<html>
<title></title>
<link rel="stylesheet"type="text/css"href="sam.css" />


<body background="">
<h1> <font color=black><u><u></h1>
<div id ="gov">
<form  action="" method="POST" >
<fieldset><legend style="color:black;">personal Information </legend>
<p style="text-align:center;color:black;"><u>Enter Your Details here.</u></p>
   
<input type= "text" name= "firstname"  size ='50'placeholder= "enter first name" required>  </br> </br>
<input type= "text" name= "secondname"size ='50' placeholder= "enter second name"></br></br>
<input type= "text" name= "surname"size ='50' placeholder= "surname" required></br></br>

<input type= "text" name= "id" size ='50' placeholder= "identification number" required><br><br>
<input type= "text" name= "no" size ='50' placeholder= "no of children" required><br><br>

<input type= "date" name= "date" size ='50' placeholder= "yyyy-mm-dd eg 1928-01-01" required></br></br>
<select name="occupation">
<option value="teaching">teaching</option>
<option value="lab technician">lab technician</option>
<option value="janitor">janitor</option>
<option value="bedrock">bedrock</option>

</select></br></br>

<select name="gender">
<option value="1">male</option>
<option value="0">female</option>
</select></br></br>


<input type="submit" name="subm" value="insert">
 </form> 
 
    <?php

$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("robca", $conn) or die(mysql_error());

 
 if(isset($_POST['subm'])) {
  
  
$f =$_POST["firstname"];
$s =$_POST["secondname"];
$sur =$_POST["surname"];
$id =$_POST["id"];
$no=$_POST["no"];
$date =$_POST["date"];
$occupation =$_POST["occupation"]; 
$gender =$_POST["gender"]; 



	
if ($f!='' && $s!='' && $sur=!'' && $id!='' && $no!='' && $date!=''&& $occupation!='' && $gender!='' ){
	$query1 = mysql_query("INSERT INTO users (firstname ,secondname, surname,identification,no,date,occupation,gender) values('$f','$s','$sur','$id','$no','$date','$occupation','$gender' )") or die(mysql_error());

  
      if ($query1 ){
          echo "YOU HAVE BEEN SUCCESSFULLY RECORDED";
      }
 
	
	else{
		
		echo "FAILED!! PLEASE TRY AGAIN";
	}
			
}
 }
 
 
 
 
 
 
 
?>


</div>

</html>
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
<a href="deletion.php">Delete</a>
            
</html>
   