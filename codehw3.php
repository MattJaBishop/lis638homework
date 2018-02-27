<!DOCTYPE html>
<html>
	<head>
		<title>Code Homework #3 - Matt Bishop</title>
	</head>
<body>
<?php


echo "<strong>Code Homework #3 - Matt Bishop</strong><br><br><br>";


#Challenge 1: Book List

echo "<strong>Challenge 1: Book List</strong><br><br>";

#Establish multidimensional array

$books = array(
	array("PHP and MySQL Web Development","Luke","Welling",144,"Paperback",31.63), 
	array("Web Design with HTML, CSS, JavaScript and jQuery","Jon","Duckett",135,"Paperback",41.23),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers","David","Sklar",14,"Paperback",40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development","Jon","Duckett",251,"Paperback",22.09),
	array("Modern PHP: New Features and Good Practices","Josh","Lockhart",7,"Paperback",28.49),
	array("Programming PHP","Kevin","Tatroe",26,"Paperback",28.96),
);

#Establish table
#Add table border and header color

echo "<table border=1><tr bgcolor=#00ccff><td>Title</td><td>First Name</td><td>Last Name</td><td>Number of pages</td><td>Type</td><td>Price</td></tr>";
     foreach ($books as $cell){
        echo "<tr bgcolor=#e6ffff><td>".$cell[0]."</td><td>".$cell[1]."</td><td>".$cell[2]."</td><td>".$cell[3]."</td><td>".$cell[4]."</td><td>".$cell[5]."</td></tr>";
    }
echo "</table></div>";

#Add total price

$total = 0;
echo "<br><br>" . "<h style='color:blue;'><center><i>Your total price is:</i><br></center></h>"; 
foreach ($books as $price){
        $total += $price[5];
    }
echo "<h style='color:blue;'><center><strong>$" . $total . "</strong></center></h>";


#Challenge 2: Coin Toss, continued

echo "<br><br><br><strong>Challenge 2: Coin Toss, continued</strong><br>";

#Create function with variable for number of heads in a row

function coinToss ($heads)
{
	
echo "<br>Beginning the coin flipping, looking for $heads heads in a row...<br>";
	
#Establish variables for 'while' function

$headnum = 0;
$flipnum = 0;

#Create 'while' function for loop with new $heads variable

while ($headnum < $heads) {
$flip = mt_rand(0,1);

#Establish flipping function

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
echo "<br>Flipped $heads heads in a row, in $flipnum flips!";
};

coinToss (8);

?>

</body>
</html>