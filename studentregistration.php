<html>
<title></title>
<link rel="stylesheet"type="text/css"href="studentregistration.css" />
<?php

?>
<div class id="container1">
<body>
<div>
<img src="smart.jpg">
</div>
<h1> <font color=black><u><u></h1>

<div id ="gov">
<section class="form">
<form action=""  method="POST" name = "timo" onsubmit="return(validate())">
<fieldset><legend style="color:black;"> </legend>
<p style="text-align:center;color:black;"><u>Fill this form to register.</u></p>
<div>
    username:<input type= "text" name= "us"  size ='50'placeholder= "username eg ci/00083/014" required>  </br> 
	</div>
	<div>
    password:<input type= "password" name= "pass"  size ='50'placeholder= "password" required >  </br>
</div>
<div>	
confirm password<input type= "password" name= "cpass"  size ='50'placeholder= "confirm password" required>  </br> 
</div>
<div>
  first name:<input type= "text" name= "fname"  size ='50'placeholder= "enter first name" required >  </br> 
  </div>
  <div>
  second name<input type= "text" name= "sname"size ='50' placeholder= "enter second name" required></br>
  </div>
  <div>
other name<input type= "text" name= "oname"size ='50' placeholder= "othernames" required></br>
</div>
<div>
Email:<input type= "text" name= "Email"size ='50' placeholder= "ab@gmail...." required><br>
</div>
<div>
reg no:<input type= "text" name= "adm"size ='50' placeholder= "eg. ci/00109/14" required ><br><br>
</div>
<div>
school:
<select name="sch"required><br><br>
School:<option value= "Education" selected>Education</option>
<option value="Medicine" >Medicine</option>
<option value="Mathematics, Applied Statistics and Actuarial Science">Mathematics, Applied Statistics and Actuarial Science</option>
<option value="Computing and Informatics">Computing and Informatics</option>
<option value="Public Health">Public Health</option>
<option value="School of Arts">School of Arts</option></br></br>
</select><br><br>
</div>
<div>
department:<input type= "text" name= "dep"size ='50' placeholder= "department eg information technology" required><br>
</div>
<div>
course:<input type= "text" name= "co"size ='50' placeholder= "course eg.bsc IT" required></br>
</div>
<div>
Gender:<select name="gender" id="gender" required>
             
             <option value="Male">Male</option>
			 <option value="Female">Female</option>
			 </select><br>
			 </div>
			 <div>
<input type="submit" name="register" value="register" onclick=validate()>
</div>
<a href="combination.php">Back to home</a>
 </form>
</section> 
 </div>
 </div>
    <?php

$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());
if(isset($_POST['log']))
 {
     header("location:stulog.php");
 }
 if(isset($_POST['register']))
 {
   $us =$_POST["us"];  
   $pass =$_POST["pass"];
   $cpass =$_POST["cpass"];
$f =$_POST["fname"];
$s =$_POST["sname"];
$o =$_POST["oname"];
$E =$_POST["Email"];
$a =$_POST["adm"];
$sch =$_POST["sch"];
$dep =$_POST["dep"];
$co =$_POST["co"];
 if($a==$us){ 
	if($pass==$cpass ){


	
if ( $us!='' && $pass!='' && $f!='' && $s!='' && $o=!'' && $E!='' && $a!=''&& $sch!=''&& $co!=''&& $dep!='' ){
	$query1 = mysql_query("INSERT INTO studet(  username, password ,firstname ,secondname, othername,email,rgno,school,dep,course) values('$us','$pass','$f','$s','o','$E','$a','$sch','$dep','$co' )") or die(mysql_error());

  
      if ($query1 ){
         // echo "you have successfully registered";
		  echo'<script>alert("you have successfully registered")</script>';
		   header('Location:newstudentlogin.php');
      }
 } else{
		
		echo "FAILED!! PLEASE TRY AGAIN";
	}

	}else{
//echo "password did'/nt match";
echo'<script>alert("password did not match")</script>';
	}		
}else{
	//echo "your username should be equal to registration number";
	echo'<script>alert("your username should be equal to registration number")</script>';  
}
 }

 
 
 
 mysql_close( $conn);
 
 
 
?>


</div>

</html>
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()


{
var emailID = document.timo.Email.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 ))
{
alert("Please enter correct email ID")
document.timo.Email.focus() ;
return false;
}
return( true );

}



</script>