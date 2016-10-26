<!DOCTYPE html>
<html>
<head>
	<title>Color Change</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>



<?php
session_start();
if(isset($_GET['color']))
{
	$color = $_GET['color'];
	$_SESSION['color']=$color;
}

$color_session = $_SESSION['color'];
echo "bgcolor=$color_session";

?>

Choose Background Color<br>
<a href="?color="red">img src="images/red.jpg"></a>
<a href="?color="blue">img src="images/blue.jpg></a>


</body>
</html>