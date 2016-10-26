<?php

	function greeting($name) 
	{
			$name = $_GET["name"];

		if ($name == "banana") {
			echo "Hello, you are special";
		} 
		elseif ($name == "Jay") {
			echo "You have a great name.";
		}

		else {
			echo "Hello $name, you are NOT special";
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
	<input type="text" name="name">
	<input type="submit">

	<?php greeting($name); ?>
</form>

</body>
</html>