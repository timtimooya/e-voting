<html>
<title></title>
<link rel="stylesheet"type="text/css"href="sam.css" />


<body background="">
<h1> <font color=#ffff00><u><u></h1>
<div id ="gov">
<form method="POST"  name="myForm">
<fieldset><legend style="color:yellow;">Student Information </legend>
<p style="text-align:center;color:yellow;"><u>Enter candidates Details here.</u></p>
   
<input type= "text" name= "fname"  size ='50'placeholder= "enter first name" required >  </br> </br>
<input type= "text" name= "sname"size ='50' placeholder= "enter second name" required></br></br>
<input type= "text" name= "oname"size ='50' placeholder= "othernames" required ></br></br>
<input type= "text" name= "adm"size ='50' placeholder= "eg. ci/00109/14" required><br><br>
<select name="sch" id="sch">
             
             <option value="school of public health">school of public health</option>
			 <option value="school of computing and informatics">school of computing and informatics</option>
             <option value="school of medicine">school of medicine</option>
             <option value="school of agriculture and food security">school of agriculture and food security</option>
             <option value="school of art">school of arts</option>
        </select></br/></br>
<input type= "text" name= "dep"size ='50' placeholder= "department eg information technology" required><br><br>
<input type= "text" name= "co"size ='50' placeholder= "course eg.bsc IT" required></br></br>
<input type= "text" name= "post"size ='50' placeholder= "post eg.president" required></br></br>
<div class="input">
Gender:<select name="gender"><br><br>
<option value="1"  selected>Male</Option>
<option value="2">Female</Option>
</select><br>
</div>
<input type= "text" name= "image"size ='50' placeholder= "image eg.bsc IT" required></br></br>
<input type="submit" name="subm" value="register">
<a href="adminviewvetfarmladies.php">View Registered Candidates</a>
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
	$query1 = mysql_query("INSERT INTO vetfarmladies( firstname ,secondname, othername,rgno,scho,dep,course,post,gender,image) values('$f','$s','o','$a','$sch','$dep','$co','$po','$ge','$im' )") or die(mysql_error());

  
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