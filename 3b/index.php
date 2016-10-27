<?php
	function calculator() {
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$operator = $_GET['operator'];

		if ($operator == 'add') {
			echo $num1 + $num2;
		} 
		elseif ($operator == 'subtraction') {
			echo $num1 - $num2;
		}
		elseif ($operator == 'multiplication') {
			echo $num1 * $num2;
		}
		elseif ($operator == 'division') {
			echo $num1 / $num2;
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="num1">
			<select name="operator">
			  <option value="add">+</option>
			  <option value="subtraction">-</option>
			  <option value="multiplication">x</option>
			  <option value="division">/</option>
			</select>
		<input type="text" name="num2">
		<input type="submit">
	</form>
	<?php echo calculator(); ?>
	
</body>
</html>