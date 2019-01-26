<?php
ini_set('display_errors ',0);
if(isset($_REQUEST['calculate'])){
	
	$hypotenous=$_REQUEST['calculate'];
	if($hypotenous){
		$add1 =$_REQUEST['fvalue'];
		$add2 =$_REQUEST['lvalue'];
		$rob= $add1*$add1;
		$car=$add2*$add2;
		$res=$rob+$car;
		$ans=sqrt($res);
	}
	

	if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
	{
		echo "<script language=javascript> alert(\"Please Enter Values.\");</script>";
	}else if($_REQUEST['fvalue']==NULL)
	{
		echo "<script language=javascript> alert(\"Please Enter First Value.\");</script>";
	}
	else if($_REQUEST['lvalue']==NULL)
	{
		echo "<script language=javascript> alert(\"Please Enter second Value.\");</script>";
	}
}
?>
<html>
<body style="background-color:lightgray;">
<form style="background-color:aqua; position:absolute; left:40%; top:20%; height:200px">
<table style="border:groove #00FF00; height:200px;">
<tr>
<td style="background-color:aqua; color:black;">Length</td>
<td colspan="1">
<input name="fvalue" type="text" style="color:black;"/>
</td>
</tr>
          
		 <tr>
		 <td style="background-color:aqua; color:black;">Height</td>
		 <td class="auto-style5">
		 <input name="lvalue" type="text" style="color:black;"/>
		 </td>
		 </tr>
		 <tr>
		 <td></td>
		 <td>
		 <input type="submit" name="calculate" value="Calculate" style="color:wheat; background-color:blue"/>
		 </td>
		 </tr>
		 <tr>
		 <td style="background-color:aqua; color:black;">Hypotenous=</td>
		 <td style="color:darkblue"><?php echo $ans;?></td>
		 </tr>
</table>
</form>
</html>