
<!DOCTYPE HTML>
    <html>
    <head>
        <style type="text/css">
            body {background-color:aquamarine;
            }           
        
        </style>
    <title>introduction</title>
    </head>
    <body>
    <form action="homework2.php" method="POST">
        <strong>Adm:</strong><input type="text" name="Adm" value=""><br/><br/>
        <strong>Maths:</strong><input type="text" name="Maths" value=""><br/><br/>
        <strong>English:</strong><input type="text" name="English" value=""><br/><br/>
        <strong>Kiswahili:</strong><input type="text" name="Kiswahili" value=""><br/><br/>
        <strong>Science:</strong><input type="text" name="Science" value=""><br/><br/>
        <strong>Sst:</strong><input type="text" name="Sst" value=""><br/><br/>
        
     <input type="submit" value="submit" name="submit"><br/><br/>    
    </form>
    <?php
        
$conn= mysql_connect("localhost","root","") or die (mysql_error());
$db= mysql_select_db("qui5", $conn) or die(mysql_error());


if (isset($_POST['submit'])){
    $Adm=$_POST['Adm'];
    $Maths=$_POST['Maths'];
    $English=$_POST['English'];
    $Kiswahili=$_POST['Kiswahili'];
    $Science=$_POST['Science'];
    $Sst=$_POST['Sst'];
    
    if (!empty ($Adm) &&!empty($Maths)&&!empty($English)&&!empty($Kiswahili)&&!empty($Science)&&!empty($Sst)){
        
        
 $sql="insert into studentmarks (Adm,Maths,English,Kiswahili,Science,Sst) values ('$Adm','$Maths','$English','$Kiswahili','$Science','$Sst')"or die(mysql_error());
        
         $result=mysql_query($sql); 
        
echo 'submit successful';
}
else {
	echo 'PLEASE FILL ALL AREAS';
}
    }

        ?>
    </body>
    </html>