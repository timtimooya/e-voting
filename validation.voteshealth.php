<?php
session_start();
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
$ch=mysql_query("insert into voteshealth (v_id) values ('$chk')"); 
	 

if($ch)  

   {  
   //$_SESSION ['voted']=$ch;
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
