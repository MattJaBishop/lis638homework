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

$speed = 86;
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

#while

$counter = 1;
#while (($speed > 80) && ($counter < 11)) {
#	echo "BAD BAD TOO FAST TOO FAST<br>";
#	++$counter;
#}

#do while

#do {
# echo "BAD BAD TOO FAST TOO FAST<br>";
# 	++$counter;
#}	while (($speed > 80) && ($counter < 11));

#for

for ($counter = 1; $counter < 6; ++$counter) {
	echo "Right now \$counter is $counter
	<br>";
}


echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 12; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 12; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";

		
		
		
echo '<table>';

		
echo '<table border=1>';

#each row print a tr tag

for ($c = 1;$c <=12;++$c); {
		echo '<tr>';
		
	for ($innercounter = 1;
	$innercounter <=12;
	++$innercounter) {
		echo '<td
		style="color:red;">';
		echo $c*$innercounter;
		echo '</td>';
}
		echo '</tr>';
}

echo '</table>';
		
?>
</body>
</html>