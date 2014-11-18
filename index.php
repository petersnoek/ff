<!doctype html>
<html>

<head>
	<title>Fighting Fantasy 2</title>
</head>

<body>
Deze pagina gaat over "2 fighting fantasy"'<br>
<?php
	// print hallo
	echo "hallo";
	echo "<br>";
	
	/* print the date */
	date_default_timezone_set('UTC');
	echo date("d-m-Y");
	echo "<br>";
	
	// print 1 to 10 met een for-lus
	echo "FOR-LUS<br>";
	for ($i = 1; $i <= 10; $i++) {
		echo $i . "<br>";
	}
	
	// print 1 to 10 met een while lus
	echo "WHILE-LUS<br>";
	$i = 1;
	while ($i <= 10) {
		echo $i . "<br>";
		$i++;  
	}
	
?>

</body>
</html>