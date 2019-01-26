
<?php
    $conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());
    if(isset($_GET['rgno'])){
        $rgno=$_GET['rgno'];
        if(isset($_POST['submit']))
        {
            
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
		
			$query3=mysql_query("update candidate set firstname='$f',secondname='$s',othername='$o', school='$sch', department='$dep' , course='$co',  post='$po' , gender='$ge' ,where rgno='$rgno'");
            if(query3){
               
			   header('location:adminview.php');
                
            }
        }
        $query1=mysql_query("select * from candidate where rgno='$rgno'") or die(mysql_error());
        $query2=mysql_fetch_array($query1);
        ?>
    <form method="post" action="">
    Name:<input type="text" name="fname" value="<?php echo $query2['firstname'];?>"/><br/>
        second name:<input type="text" name="sname" value="<?php echo $query2['secondname'];?>"/><br/>
		Othername:<input type="text" name="oname" value="<?php echo $query2['othername'];?>"/><br/>
school <select name="sch"value="<?php echo $query2['school'];?>"><br><br>
School:<option value= "Education" selected>Education</option>
<option value="Medicine" >Medicine</option>
<option value="Mathematics, Applied Statistics and Actuarial Science">Mathematics, Applied Statistics and Actuarial Science</option>
<option value="Computing and Informatics">Computing and Informatics</option>
<option value="Public Health">Public Health</option>
<option value="School of Arts">School of Arts</option></br></br>
</select><br><br>
department<input type= "text" name= "dep"size ='50' placeholder= "department eg information technology" value="<?php echo $query2['department'];?>"required><br><br>
course <input type= "text" name= "co"size ='50' placeholder= "course eg.bsc IT" value="<?php echo $query2['course'];?>" required></br></br>
post <input type= "text" name= "post"size ='50' placeholder= "post eg.president" value="<?php echo $query2['post'];?>" required></br></br>
<div class="input">
Gender:<select name="gender" value="<?php echo $query2['Gender'];?>"><br><br>
<option value="Male"  selected>Male</Option>
<option value="Female">Female</Option>
</select><br>
		
    <input type="submit" name="submit" value="update"/>
        
    
    
    
    
    
    
    </form><?php
    }
    
    
    
    
  ?>  
   








