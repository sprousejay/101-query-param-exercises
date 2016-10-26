<?php
	function password($password) {
		$password = strtolower($_GET["password"]);

		if ($password == "banana") {
			echo "hey";
		}
		else {
			echo "Sorry, wrong password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" action="">
	<input type="text" name="password">
	<input type="submit">

	<?php echo password($password); ?>
</form>

</body>
</html>