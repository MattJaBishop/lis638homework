<html>
<body>
<?php
echo "Hello again, world!";

# Conditionals
# if, else, elseif
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

# switch

switch ($sky) {
	case "A little cloudy":
		echo ":(";
		break;
	case "Sunny":
		echo ":)";
		break;
	case "Windy":
		echo ";)";
		break;
	case "Rainy":
		echo "Meh";
		break;
	default:
		echo "No idea";
		break;
}

# exercise

$speed = 45;
$currentdate = date("md");
$birthday = "1128";

if ($birthday==$currentdate) {
	echo "It's your birthday!";
	$speed = $speed-5;
}

if (($speed >= 61) && ($speed <= 80)) {
	echo "Small ticket";
} 	elseif ($speed < 60) {
		echo "No ticket";
}
	else {
		echo "Big ticket";
}

?>
</body>
</html>