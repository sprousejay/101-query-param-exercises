Insert two numbers in the next form and hit submit button 
<form action="calculation.php" method="post"> 
	Firstnumber: <input name="num1" type="text" />
	Secondnumber: <input name="num2" type="text" /> 
	<input type="submit" />
</form>


<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$a = $num1 + $num2;
	$b = $num1 - $num2;
	echo "The sum of the two numbers is ". $a;
	echo "The difference of the two numbers is ". $b;
?>