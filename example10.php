<?php
$con= mysql_connect("localhost", "root", "");
$mydb=mysql_select_db("student");
$sql=SELECT * FROM Data;
$records=mysql_query($sql);
?>
<html>
<head>
<title>Student data</title>
</head>
<body>
<table width="80%" border="1" cellpadding="1" cellspacing"1">
<tr> <!--table row-->
<th>Admission number</th>
<th>First Name</th>
<th>Last Name</th>
<th>Year of study</th>
<th>subject</th>
</tr>

<?php
while($data=mysql_fetch_array($records)){
	echo '<tr>'
	echo '<td>'.$data['adm_num'].'</td>'
	echo '<td>'.$data['first_name'].'</td>'
    echo '<td>'.$data['last_name'].'</td>'
	echo '<td>'.$data['year_study'].'</td>'
	echo '<td>'.$data['subject'].'</td>'
    echo '</tr>'
}
?>
</table>
</html>