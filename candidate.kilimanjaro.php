<html>
<title></title>
<link rel="stylesheet"type="text/css"href="sam.css" />


<body background="">
<h1> <font color=black><u><u></h1>
<div id ="gov">
<form method="POST"  name="myForm" enctype="multipart/form-data">
<fieldset><legend style="color:black;">candidates Information </legend>
<p style="text-align:center;color:black;"><u>Enter candidates kilimanjaro Details here.</u></p>
   
<input type= "text" name= "fname"  size ='50'placeholder= "enter first name" required>  </br> </br>
<input type= "text" name= "sname"size ='50' placeholder= "enter second name" required></br></br>
<input type= "text" name= "oname"size ='50' placeholder= "othernames" required></br></br>
<input type= "text" name= "adm"size ='50' placeholder= "eg. ci/00109/14" required><br><br>
<select name="sch"><br><br>
School:<option value= "1" selected>Education</option>
<option value="2" >Medicine</option>
<option value="3">Mathematics, Applied Statistics and Actuarial Science</option>
<option value="4">Computing and Informatics</option>
<option value="5">Public Health</option>
<option value="6">School of Arts</option></br></br>
</select><br><br>
<input type= "text" name= "dep"size ='50' placeholder= "department eg information technology" required><br><br>
<input type= "text" name= "co"size ='50' placeholder= "course eg.bsc IT" required></br></br>
<input type= "text" name= "post"size ='50' placeholder= "post eg.president" required></br></br>
<div class="input">
Gender:<select name="gender"><br><br>
<option value="1"  selected>Male</Option>
<option value="2">Female</Option>
</select><br>
</div>
<input type= "file" name= "image" required></br></br>
<input type="submit" name="subm" value="register">
<a href="adminviewkilimanjaro.php">View registered candidates</a>
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
$uploadDir = 'uploads/';
     $fileName=$_FILES['image']['name'];
    $tmpName=$_FILES['image']['tmp_name'];
    $fileSize=$_FILES['image']['size'];
    $fileType=$_FILES['image']['type'];
    $filePath= $uploadDir.$fileName;
    $result=move_uploaded_file($tmpName,$filePath);
	

    if(!$result){
        $filePath="uploads/no_images.jpeg";
	
	}



	
if ($f!='' && $s!='' && $o=!''&& $a!=''&& $sch!=''&& $co!=''&& $dep!='' &&$po!='' && $ge!=''){
	$query1 = mysql_query("INSERT INTO kilimanjaro( firstname ,secondname, othername,rgno,scho,dep,course,post,gender,path) values('$f','$s','o','$a','$sch','$dep','$co','$po','$ge','$filePath' )") or die(mysql_error());

}
      if ($query1 ){
          echo "REGISTRATION IS SUCCESSFUL";
      }
 
	
	else{
		
		echo "FAILED!! PLEASE TRY AGAIN";
	}
			
}
 
 
 
 
 
 mysql_close( $conn);
 
 
 
?>


</div>

</html>