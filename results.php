<?php

$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];
$num3 = $_POST ['num3'];
$num4 = $_POST ['num4'];
$result = $num1 + $num2;
$result2 = $num3 - $num4;

?>
<html>
<title>Online Calculator</title>
<style>
div#main {
	text-align: center;
	color: white;
}

div#title {
	font-family: Helvetica;
}

</style>
<body bgcolor="grey">
</html>
<?php
echo '<div id="main">';
echo '<div id="title">';
echo '<h1><center>Results</center></h1>';
echo '</div>';
echo '<h2>';
echo 'Your addition answer is <b><u>'. $result .'</b></u>';
echo '<br><br>';
echo 'Your subtraction answer is <b><u>'. $result2 .'</b></u>';

?>
