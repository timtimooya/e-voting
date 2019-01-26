<html>
<body>
</body>

<?php
        $conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("timo", $conn) or die(mysql_error());
    if(isset($_GET['rgno'])){
 $rgno=$_GET['rgno'];
        $query1=mysql_query("delete from candidate where rgno='$rgno'") or die (mysql_error());
        if($query1){
            header('location:adminview.php');
            
        }
        
        echo '$rgno';
        
        
        
    }
    
?>
    
    
    </html>
    
    





