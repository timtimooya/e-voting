<?php
ini_set('display_errors ',0);
if(isset($_REQUEST['calculate'])){
	
	$operator=$_REQUEST['operator'];
	if($operator=="+"){
		$add1 =$_REQUEST['fvalue'];
		$add2 =$_REQUEST['lvalue'];
		$res= $add1+$add2;
	}

if($operator=="-"){
		$add1 = $_REQUEST['fvalue'];
		$add2 = $_REQUEST['lvalue'];
		$res= $add1-$add2;
	}
	
	if($operator=="*"){
		$add1 = $_REQUEST['fvalue'];
		$add2 = $_REQUEST['lvalue'];
		$res= $add1*$add2;
		
	}
	
	if($operator=="/"){
		$add1 = $_REQUEST['fvalue'];
		$add2 = $_REQUEST['lvalue'];
		$res= $add1/$add2;
	}
	if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
		
	{
		$res=NULL;
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
<form>
<table style="border:groove #00FF00;">
<tr>
<td style="background-color:aqua; color:red;">Enter First Number</td>
<td colspan="1">
<input name="fvalue" type="text" style="color:red;"/>
</td>
</tr>
           <tr>
		   <td style="color:burlywood;">Select operator</td>
		   <td>
		   <select name="operator" style="width:63px;">
		   <option>+</option>
		    <option>-</option>
			 <option>*</option>
			  <option>/</option>
		   </select>
		   </td>
		   </tr>
		 <tr>
		 <td style="background-color:aqua; color:red;">Enter Second Number</td>
		 <td class="auto-style5">
		 <input name="lvalue" type="text" style="color:red;"/>
		 </td>
		 </tr>
		 <tr>
		 <td></td>
		 <td>
		 <input type="submit" name="calculate" value="Calculate" style="color:wheat; background-color:rosybrown"/>
		 </td>
		 </tr>
		 <tr>
		 <td style="background-color:aqua; color:red;">Output=</td>
		 <td style="color:darkblue"><?php echo $res;
	?></td>
		 </tr>
</table>
</form>
</html>