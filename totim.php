

//moving the picture selected to the uploads folder
$uploadDir = 'uploads/';
     $fileName=$_FILES['userfile']['name'];
    $tmpName=$_FILES['userfile']['tmp_name'];
    $fileSize=$_FILES['userfile']['size'];
    $fileType=$_FILES['userfile']['type'];
    $filePath= $uploadDir.$fileName;
    $result=move_uploaded_file($tmpName,$filePath);
    if(!$result){
        $filePath="uploads/no_images.jpeg";
        
    }
    
    $query6=mysql_query("update studetl set path='$filePath' where userid='$i'") or die(mysql_error());
    $path=$filePath;
           


     }
	 ////////inserting path into the database
	  $query=mysql_query("SELECT * FROM studetl where userid='".$_SESSION['i']."'")or die(mysql_error());
$rows=mysql_num_rows($query);
if($rows==1){
    while($row=mysql_fetch_array($query)){
         $_SESSION['im']=$row['path'];
    }
}