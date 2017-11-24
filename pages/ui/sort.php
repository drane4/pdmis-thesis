<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Sorting PHP Numeric Array in Ascending Order</title>
</head>
<body>

<?php
$text = array("X","Y","A","B","E","D");
$numbers = array(1, 2, 3.5, 5, 8, 10);
 
// Sorting the array of string
sort($text);
print_r($text);
echo "<br>";
 
// Sorting the array of numbers
sort($numbers);
print_r($numbers);
?>

</body>
</html>              