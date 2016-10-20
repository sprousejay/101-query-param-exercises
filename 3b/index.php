<!DOCTYPE html>
<html>
<head>
	<title>Answer</title>
</head>
<body>
<p>The answer is: 
<?php
$first = $_POST['first'];
$second= $_POST['second'];

if($_POST['group1'] == add) {
echo "$first + $second";
}
else if($_POST['group1'] == subtract) {
echo "$first - $second";
}
else if($_POST['group1'] == times) {
echo "$first * $second";
}
else($_POST['group1'] == divide) {
echo "$first / $second";
}
?>
</p> 
</body>
</html>