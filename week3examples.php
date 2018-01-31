<html>
<body>
<?php
echo "Hello again, world!";

# Conditionals

$tempf = 40;
$sky = "A little cloudy";

if (($tempf >= 32) && ($tempf <= 80)) {
	echo "It's not freezing outside!";
} elseif ($tenpf > 80) {
	echo "<p>Uh oh, it's hot out!<p>";
}
	else {
		echo "<p>Uh oh, it's freezing!<p>";
}

?>
</body>
</html>