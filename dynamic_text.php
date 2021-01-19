<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php 
$msg ="Hello shaimaa, Lest's start php projects again^_^";

// this function says hi
echo "<h1>Hi Shaimaa</h1>";

// arrayn in old way
$List = array(23,24,'shaimaa',10.4,21,'<h2>Hello</h2>');

//do it by myseslf before seeing the tut ^_^
foreach ($List as $value) {
  echo $value;
  echo "<br>";
}

//tut : using print_r to show us the index and its value.
print_r($List);
echo "<br>";
// to print a certain value based on its index
echo $List[2];
echo "<br>";

 
//Associative//


//scope//

$var1 ="outside"; //global
function convert()
{

  global $var1; //to change the value of var1 into "inside"
  $var1 ="inside"; //local

}
 
echo $var1;
echo "<br>";
convert();
echo $var1;
echo "<br>";

//constants

$const = 24;

echo "my age is : ".$const;
echo "<br>";
define("NAME", 24442);
echo NAME;

//section 4 practise
//1 & 2:
function calc($num1,$num2)
{
  $sum = $num1 + $num2 ;
  return $sum;
}
echo "<br>".calc(4,8);



// math functions

echo "<br>";

echo pow(2,4);
echo "<br>";
echo rand(1,1000);
echo "<br>";
echo sqrt(25);
echo "<br>";
echo ceil(100.6);// up near num
echo "<br>";
echo floor(12.5); // less near num
echo "<br>";
echo round(3.4);// if greater than 4 it will be 4


// string functions

$string ="Hi, I'm shaimaa maher sheta" ;

echo "<br>";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);

//array functions

$menu = [23,45,65,78,11,22,90,25];
echo "<br>";
echo max($menu);
echo "<br>";
echo min($menu);
echo "<br>";
sort($menu);
print_r($menu);

 

//forms




?>



</body>
</html>