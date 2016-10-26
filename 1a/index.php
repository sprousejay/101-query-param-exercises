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
	<?php echo password($password); ?>
</body>
</html>