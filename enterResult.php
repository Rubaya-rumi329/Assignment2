<?php


session_start();
	
 ?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
    <form name="form1" method="post" action="resultSubmit.php">
    <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
    <tr>
    <td colspan=""><strong>Course Result </strong></td>
    </tr>
<?php 
  if($_SESSION['teacher_id'] == 1){
?>
<input name="student_id"  type="hidden" value="<?php echo $_GET['id'] ?>" >
    <tr>
       <td width="100"> Course 1 </td>

	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t1_c1_ct" type="text" id="t1_c1_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t1_c1_final" type="text" id="t1_c1_final" ></td>
    </tr>

 <tr>
       <td width="100"> Course 2 </td>
	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t1_c2_ct" type="text" id="t1_c2_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t1_c2_final" type="text" id="t1_c2_final" ></td>
    </tr>


 <tr>
       <td width="100"> Course 3 </td>
	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t1_c3_ct" type="text" id="t1_c3_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t1_c3_final" type="text" id="t1_c3_final" ></td>
    </tr>


<?php 
  }
?>

<?php 
  if($_SESSION['teacher_id'] == 2){
?>
<input name="student_id"  type="hidden" value="<?php echo $_GET['id'] ?>" >
    <tr>
       <td width="100"> Course 1 </td>

	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t2_c1_ct" type="text" id="t2_c1_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t2_c1_final" type="text" id="t2_c1_final" ></td>
    </tr>

 <tr>
       <td width="100"> Course 2 </td>
	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t2_c2_ct" type="text" id="t2_c2_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t2_c2_final" type="text" id="t2_c2_final" ></td>
    </tr>


 <tr>
       <td width="100"> Course 3 </td>
	      <td width="100">Class Test</td>
	    <td width="6">:</td>
	    <td width="294"><input name="t2_c3_ct" type="text" id="t2_c3_ct" ></td>
    
	    <td>Final </td>
	    <td>:</td>
	    <td><input name="t2_c3_final" type="text" id="t2_c3_final" ></td>
    </tr>
<?php 
  }
?>

    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
    </table>
    </td>
    </form>
    </tr>
</table>