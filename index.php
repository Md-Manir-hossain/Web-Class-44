
<?php

echo "<h1> This is our PHP Intro Class..... </h1>";


$x = 20;
$y = 90;

$result = $x+$y;

echo "Result=" .$result;

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Intro Class </title>
</head>
<body>


<h1> This is our PHP Intro Class..... </h1>
<marquee> This is our PHP First Class..... </marquee>

<?php

echo "<h2> This is our PHP Second Sentence..... </h2>";

$indexarray = [40, 50, 800, 600, 562, 450, 864, 894];
// echo $indexarray [0]."<br>"; 
// echo $indexarray [1]."<br>";
// echo $indexarray [2]."<br>";
// echo $indexarray [3]."<br>";
// echo $indexarray [4]."<br>";
// echo $indexarray [5]."<br>";
// echo $indexarray [6]."<br>";
// echo $indexarray [7]."<br>";

for ($i=0; $i<8; $i++) {
    echo $indexarray [$i]."<br>";
}


?>
    
</body>
</html>