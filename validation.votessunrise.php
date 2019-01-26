<?php

  
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
$ch=mysql_query("insert into votessunrise (v_id) values ('$chk')")or die(mysql_error()); 
	 

if($ch==1)  
   {  
$_SESSION ['voted']=$ch;
      echo'<script>alert("Successfully voted  ")</script>'; 
       
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