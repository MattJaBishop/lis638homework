<html>
	<head>
		<title>Code Homework #1 - Matt Bishop</title>
	</head>
<body>
<?php

#Challenge 1

echo "<strong>Code Homework #1 - Matt Bishop</strong><br><br><br>";

echo "<strong>Challenge 1: Correct Change</strong><br><br>";

#Establish price and payment variables

$price = 157.32;
$payment = 200;

#Establish function definition for change variable

$change = $payment - $price;

#Establish functions for all change types using using int until cents
#Make sure to nest functions for each one that follows

$dollars = (int) ($change / 1);

$quarters = (int) ((($change - $dollars) * 100) / 25);

$dimes =(int) (((($change - $dollars) * 100) - (25 * $quarters)) / 10);

$nickels = (int) (((($change - $dollars) * 100) - (25 * $quarters) - (10 * $dimes)) / 5);

$cents = (int) ((((($change - $dollars) * 100) - (25 * $quarters)- (10 * $dimes) - (5 * $nickels)) / 1));

#Establish text output

echo "Your change is: $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), and $cents cent(s).<br><br><br>";


#Challenge 2

echo "<strong>Challenge 2: 99 Bottles of Beer</strong><br><br>";

#Establish botlle count variable

$bottles = 99;

#Establish while-if function for zero bottles

while ($bottles >= 0) {
  if ($bottles - 1 == 0) {
      echo $bottles.' bottle of beer on the wall, '.$bottles.' bottle of beer,<br>';
      echo 'Take one down and pass it around, no more bottles of beer on the wall.<br><br>';
}
  
#Establish final lines after zero bottles
 
  else if ($bottles - 1 < 0){
      echo 'No more bottles of beer on the wall, no more bottles of beer,<br>';
      echo 'Go to the store and buy some more, 99 bottles of beer on the wall.';
}
  
#Establish main verse
  
  else {
      echo $bottles.' bottles of beer on the wall, '.$bottles.' bottles of beer,<br>';
      echo 'Take one down and pass it around, '.(($bottles - 1)).' bottles of beer on the wall.<br><br>';
}
  
#Establish decrement

$bottles--;

}  

?>
</body>
</html>