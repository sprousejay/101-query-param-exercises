<?php
	function calculator() {
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$operator = $_GET['operator'];

		if ($operator == 'add') {
			echo $num1 + $num2;
		}
	}
?>

<?php echo calculator(); ?>