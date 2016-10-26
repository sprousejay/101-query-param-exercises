<?php
	function greeting($name) {
		$name = $_GET["name"];

		if ($name == "Jay") {
			echo "Hey, how are you?";
		}
		elseif ($name =="Nikki") {
		 	echo "How are you doing today?";
		 } 
		 else {
			echo "$name I dont know you.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php greeting($name); ?>
</body>
</html>