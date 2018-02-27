<!DOCTYPE html>
<html>
	<head>
		<title>Code Homework #2 - Matt Bishop</title>
	</head>
<body>
<?php


echo "<strong>Code Homework #2 - Matt Bishop</strong><br><br><br>";


#Challenge 1: ISBN Validation

echo "<strong>Challenge 1: ISBN Validation</strong><br><br>";

#Establish ISBN variable

$isbn = "151519647X";

#Establish functions for sum and divide (remainder) algorithms with condition for X

if (substr($isbn, 9, 1) == "X")
	$isbnsum = (int) ((10 * substr($isbn, 0, 1)) + (9 * substr($isbn, 1, 1)) + (8 * substr($isbn, 2, 1)) + (7 * substr($isbn, 3, 1)) + (6 * substr($isbn, 4, 1)) + (5 * substr($isbn, 5, 1)) + (4 * substr($isbn, 6, 1)) + (3 * substr($isbn, 7, 1)) + (2 * substr($isbn, 8, 1)) + (1 * 10));
else
	$isbnsum = (int) ((10 * substr($isbn, 0, 1)) + (9 * substr($isbn, 1, 1)) + (8 * substr($isbn, 2, 1)) + (7 * substr($isbn, 3, 1)) + (6 * substr($isbn, 4, 1)) + (5 * substr($isbn, 5, 1)) + (4 * substr($isbn, 6, 1)) + (3 * substr($isbn, 7, 1)) + (2 * substr($isbn, 8, 1)) + (1 * substr($isbn, 9, 1)));

$dividesum = $isbnsum % 11;

#Establish results

echo "Checking isbn: $isbn for validity...<br><br>";

function isbnCheck ($dividesum)
{
if ($dividesum > 0)
	echo "This is NOT a valid ISBN!<br>";
else
	echo "This is a valid ISBN!<br>";
};

isbncheck ($dividesum);



#Challenge 2: Coin Toss

echo "<br><br><strong>Challenge 2: Coin Toss</strong><br>";


#Part A

#Establish function


#Note: I'm not sure exactly how to fix the error I get from the function in the line below this text without messing up the code
#Before I got the error, I had the variable outside my function which produced the same penny face for all tosses
#But when I put the variable within the function, I get a lot of line errors, so this approach produced the least errors
$coin = $coinflip;

function coinToss ($coin)
{
$coinflip = mt_rand(0,1);
if ($coinflip == 0)
	echo "<img src='http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg' alt='heads' />";
else
	echo "<img src='http://random-ize.com/coin-flip/us-penny/2010-us-penny.jpg' alt='tails' />";
};

#Output function according to echo commands

echo "<br>Flipping a coin 1 times...<br>"; 

coinToss ($coin);

echo "<br>Flipping a coin 3 times...<br>"; 

coinToss ($coin);
coinToss ($coin);
coinToss ($coin);

echo "<br>Flipping a coin 5 times...<br>"; 

coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);

echo "<br>Flipping a coin 7 times...<br>"; 

coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);

echo "<br>Flipping a coin 9 times...<br>"; 

coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);
coinToss ($coin);


#Part B

echo "<br><br><br>Begin the coin flipping...<br>";

#Establish variables

$headnum = 0;
$flipnum = 0;

#Create 'while' function for loop

while ($headnum < 2) {
$flip = mt_rand(0,1);

#I could not reuse my coinToss function from above: I tried to use it here, but it wouldn't work, which is probably due to my line error in Part A

$flipnum ++;
	if ($flip){
		$headnum ++;
	echo "<img src='http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg' alt='heads' />";
	}
	else {
		$headnum = 0;
	echo "<img src='http://random-ize.com/coin-flip/us-penny/2010-us-penny.jpg' alt='tails' />";
	}
}
echo "<br>Flipped two heads in a row, in $flipnum flips!";

?>

</body>
</html>