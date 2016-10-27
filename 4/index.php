<!DOCTYPE html>
<html>
<head>
	<title>Color Change</title>
<link rel="stylesheet" type="text/css" href="./4/style1.css">

<?php theme(); ?>
</head>

<body>

<?php
	function theme() {
		$theme = $_GET['theme'];

		if ($theme == 'blue') {
			echo '<link rel="stylesheet" type="text/css" href="./4/style1.css">';
		} 
		elseif ($theme == 'red') {
			echo '<link rel="stylesheet" type="text/css" href="./4/style2.css">';
		}
	}
?>

Choose Background Color<br>
<a href="?theme=red">Switch Theme</a>


</body>
</html>