<html>
<title></title>
<link rel="stylesheet"type="text/css"href="styl.css" />


<div class="register-form">
<div class="register-face"><img src="mas.jpg"></div>
<section class="form">
<form action='' method="POST"  name="myForm">
<fieldset><legend style="color:black;">Student Information </legend>
<p style="text-align:center;color:black;"><u>Enter candidates Details here.</u></p>
<div class="input">
<input type= "text" name= "fname"  size ='50'placeholder= "enter first name" required>  </br> </br>
</div>
<div class="input">
<input type= "text" name= "sname"size ='50' placeholder= "enter second name" required></br></br>
</div>
<div class="input">
<input type= "text" name= "oname"size ='50' placeholder= "othernames"></br></br>
</div>
<div class="input">
<input type= "text" name= "adm"size ='50' placeholder= "eg. ci/00109/14" required><br><br>
</div>
<div class ="input">
 <select name="sch"><br><br>
School:<option value= "1" selected>Education</option>
<option value="2" >Medicine</option>
<option value="3">Mathematics, Applied Statistics and Actuarial Science</option>
<option value="4">Computing and Informatics</option>
<option value="5">Public Health</option>
<option value="6">School of Arts</option></br></br>
</select><br><br>
</div>
<div class="input">
<input type= "text" name= "dep"size ='50' placeholder= "department eg information technology" required><br><br>
</div>
<div class="input">
<input type= "text" name= "co"size ='50' placeholder= "course eg.bsc IT" required></br></br>
</div>
<div class="input">
<input type= "text" name= "post"size ='50' placeholder= "post eg.president" required></br></br>
</div>
<div class="input">
Gender:<select name="gender"><br><br>
<option value="1"  selected>Male</Option>
<option value="2">Female</Option>
</select><br>
</div>
<br><input type= "text" name= "image"size ='50' placeholder= "image eg.bsc IT" required></br></br>


<div class="input">
<input type="submit" name="subm" value="register"><br><br>
</div>
<a href="adminview.php">View Registered Candidates</a>
 

</div>
</section>

</form>
    <?php

$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());

 
 if(isset($_POST['subm'])) {
  
  
$f =$_POST["fname"];
$s =$_POST["sname"];
$o =$_POST["oname"];
$a =$_POST["adm"];
$sch =$_POST["sch"];
$dep =$_POST["dep"];
$co =$_POST["co"]; 
$po =$_POST["post"]; 
$ge =$_POST["gender"]; 
$im =$_POST["image"]; 



	
if ($f!='' && $s!='' && $o=!''&& $a!=''&& $sch!=''&& $co!=''&& $dep!='' &&$po!='' && $ge!='' && $im!='' ){
	$query1 = mysql_query("INSERT INTO newmark( firstname ,secondname, othername,rgno,scho,dep,course,post,gender,image) values('$f','$s','o','$a','$sch','$dep','$co','$po','$ge','$im' )") or die(mysql_error());

  
      if ($query1 ){
          echo "REGISTRATION IS SUCCESSFUL";
      }
 
	
	else{
		
		echo "FAILED!! PLEASE TRY AGAIN";
	}
			
}
 }
 
 
 
 
 mysql_close( $conn);
 
 
 
?>


</div>

</html>