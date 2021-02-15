<!DOCTYPE html>
<html>
<head>
<title>kalkulator</title>
</head>
<body>
<form method="post" action="">
<input type="text" name="op1">
<select name="operator">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="op2">
<input type="submit" name="btn_submit" value="=">
</form>

<?php
include ('cal.php');
if (isset ($_POST['btn_submit'])){
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$operator = $_POST['operator'];
	
	
	$calculator = new Calc($op1, $op2, $operator);
    $calculator->calcMethod();
	

}

?>





</body>
</html>