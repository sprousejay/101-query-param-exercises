<?php
	function calculator() {
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$addition = $_GET['operator'];
		if ($addition == '+') {
			echo '$num1 + $num2';
		}
	}
?>

<?php echo calculator(); ?>