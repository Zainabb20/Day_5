<?php
//Create an array
//Numerical array
$a= array("Zainab","Zahra","Tabbu");
echo"First index of array has : $a[1]";
?>

<?php
//Associative array
$b=array(0=>"10",'c'=>"clever",'s'=>"server" );
echo"<br/>Zero index has : $b[0]";
?>

<?php
//Count Function
$a= array("Zainab","Zahra","Tabbu");
$c=count($a);
echo"<br/>Length of array is: $c";
?>

<?php
//Array Count Value
$a= array("Zainab","Zahra","Tabbu");
$cv=array_count_values($a);
foreach ($cv as $key => $value) 
{
   echo "<br/>$key - <strong>$value</strong> "; 
    
}

?>

<?php
//Sum of Array
$d= array(1,2,4,5,7,8,9,7);
$sum= array_sum($d);
echo"<br/>Sum of array is : $sum";
?>

<?php
//Product of Array
$d= array(1,2,4,5,7,8,9,7);
$product= array_product($d);
echo"<br/>Product of array is : $product";
?>

<?php
//Reverse of Array
$d= array(1,2,4,5,7,8,9,7);
$rev= array_reverse($d);
echo"<pre><br/>";
print_r($rev);
echo"<pre>";
?>


<?php
//Array Random Function
$d= array(1,2,4,5,7,8,9,7);
$ioa= array_rand($d);
echo "Random selected keys:" .$d[$ioa];
?>

<?php
//Multiple Key selection
$d= array(1,2,4,5,7,8,9,7);
$ioa= array_rand($d,4);

foreach ($ioa as $key => $value) 
{
  echo "<br />$key - <strong>" . $d[$value] . "</strong>";  
}
?>


<?php
//Array Unique
$d= array(1,2,4,5,7,8,9,7);
print_r(array_unique($d));
?>

<?php
//Array Merge
$d= array(1,2,4,5,7,8,9,7);
$a= array("Zainab","Zahra","Tabbu");
$merge= array_merge($a,$d);
print_r($merge);
?>

<?php
//Array Search
$d= array(1,2,4,5,7,8,9,7);
$search= array_search('7', $d);
echo"Index of 7 is:" .$search;
?>

<?php
//Array Range
$d= range("30","38");
foreach ($d as $key => $value) 
{
   echo "<br /> $key - $value "; 
}

$a = range('a','z');
print_r($a);

?>

<?php
//Sort Array
$d= array(1,2,4,5,7,8,9,7);
sort($d);
print_r($d);


?>

<?php
//rsort function 
$d= array(1,2,4,5,7,8,9,7);
rsort($d);
print_r($d);


?>

<?php
//asort function 
$d= array(1,2,4,5,7,8,9,7);
asort($d);
print_r($d);
?>

<?php
//ksort function 
$d= array("Banana"=>"yellow","Apple"=>"Red");
ksort($d);
foreach ($d as $key => $value) 
{
   echo "<br /> $key - $value "; 
}
?>

<?php
//ksort function 
$d= array("Banana"=>"yellow","Apple"=>"Red");
krsort($d);
foreach ($d as $key => $value) 
{
   echo "<br /> $key - $value "; 
}
?>

<?php
//Shuffle function 
$d= array("Banana","yellow","Apple","Red");
shuffle($d);
foreach ($d as $key => $value) 
{
   echo "<br /> $value "; 
}
?>

<?php
//array key exists function 
$d= array("Banana"=>"yellow","Apple"=>"Red");
echo array_key_exists('Banana', $d);
?>

<?php
//array change key case function 
$d= array("Banana"=>"yellow","Apple"=>"Red");
$uppercase = array_change_key_case($d,CASE_UPPER);
print_r($uppercase);

?>

<?php
//array combine function 
$d= array(1,2,4);
$a= array("Zainab","Zahra","Tabbu");
$combine= array_combine($a,$d);
print_r($combine);
?>

<?php
//End Function
$a= array("Zainab","Zahra","Tabbu");
echo end($a);
?>

<?php

//Compact Function
$name="Zainab";
$branch="CSE";
$compact=compact("name","branch");
print_r($compact);

?>

<?php

//Flip Function
$d= array("Banana"=>"yellow","Apple"=>"Red");
$fa= array_flip($d);
print_r($fa);

?>

<?php

//Difference Function
$d= array("Banana","yellow","Apple","Red");
$a= array("Banana","yellow","Apple","Red","Zainab","Zahra","Tabbu");
$dif= array_diff($a,$d);
print_r($dif);

?>

<?php

//Array Intersect Function
$d= array(0=>"yellow",1=>"Red");
$e= array(4=>"Banana",5=>"Red");

print_r(array_intersect($e, $d));

?>

<?php

//Array Values Function
$d= array(0=>"yellow",1=>"Red");
$a=array_values($d);

foreach ($a as $key => $value)
{
    echo " <br />$key - $value";
}

?>


<?php

//Array Push Function
$d= array(0,"yellow",1,"Red");
array_push($d,1,5,8);
print_r($d);
?>

<?php

//Array Pop Function
$d= array(0,"yellow",1,"Red");
array_pop($d);
print_r($d);
array_pop($d);
print_r($d);
?>

<?php

//Array Exlode Function
$d= "I am a CSE student";
$a=explode(" ",$d);
print_r($a);
?>

<?php

//Array Implode Function
$d= array("I","am","a","CSE","student");
$a=implode(" ",$d);
echo $a;

?>