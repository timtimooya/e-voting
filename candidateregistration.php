<html>
<title></title>
<link rel="stylesheet"type="text/css"href="sam.css" />


<body background="">
<h1> <font color=black><u><u></h1>
<div id ="gov">
<form method="POST"  name="myForm" enctype="multipart/form-data">
<fieldset><legend style="color:black;">Student Information </legend>
<p style="text-align:center;color:black;"><u>Enter candidates Details here.</u></p>
   
<input type= "text" name= "Name"  size ='50'placeholder= "enter first name" required >  </br> </br>
<input type= "text" name= "Registration number"size ='50' placeholder= "enter second name" required></br></br>
<input type= "text" name= "email"size ='50' placeholder= "othernames" required></br></br>
<select name="school"><br><br>
School:<option value= "1" selected>Education</option>
<option value="2" >Medicine</option>
<option value="3">Mathematics, Applied Statistics and Actuarial Science</option>
<option value="4">Computing and Informatics</option>
<option value="5">Public Health</option>
<option value="6">School of Arts</option></br></br>
</select><br><br>
<input type= "text" name= "Department"size ='50' placeholder= "department eg information technology" required><br><br>
<input type= "text" name= "Course"size ='50' placeholder= "course eg.bsc IT" required></br></br>
<input type= "text" name= "Post"size ='50' placeholder= "post eg.president" required></br></br>
<div class="input">
Gender:<select name="Gender"><br><br>
<option value="1"  selected>Male</Option>
<option value="2">Female</Option>
</select><br>
</div>

<input type="submit" name="subm" value="register">
<a href="adminviewsecretrygeneral.php">View registered candidates</a>
 </form> 
    <?php

$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());

 
 if(isset($_POST['subm'])) {
  
  
$f =$_POST["Name"];
$s =$_POST["Registration number"];
$o =$_POST["email"];
$a =$_POST["School"];
$sch =$_POST["Department"];
$dep =$_POST["Course"];
$po =$_POST["Post"]; 
$ge =$_POST["Gender"]; 

	

    



	
if ($f!='' && $s!='' && $o=!''&& $a!=''&& $sch!=''&& $dep!='' &&$po!='' && $ge!=''){
	$query = mysql_query("INSERT INTO carocandidates( Name ,Registration number, email,School,Department,Course,Post,Gender,) values('$f','$s','o','$a','$sch','$dep','$po','$ge' )") or die(mysql_error());

}
      if ($query ){
          echo "REGISTRATION IS SUCCESSFUL";
      }
 
	
	else{
		
		echo "FAILED!! PLEASE TRY AGAIN";
	}
			
}
 
 
 
?>


</div>

</html>