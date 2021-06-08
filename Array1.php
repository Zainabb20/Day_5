<?php
//Numerical Array
//Method 1

$a[0]=100;
$a[1]=24.85;
$a[2]='c';
$a[3]='abcd';
$a[4]='4';
        
//Method 2
//Index Dynamic Array
//No need to specify the index

$a[]=100;
$a[]=24.85;
$a[]='c';
$a[]='abcd';
$a[4]='4';

//Method 3
//This method is preferred for creating an array

$a=array(15,75,'c','python',84.74,'s');

//Printing the values
echo "<br/>The value at index second is:".$a[2];

//Print the whole array
$length=count($a);
for($i=0;$i<$length;$i++)
{
    echo"<br/>".$a[$i];
}
   
$sum= array_sum($a);
echo"<br/>$sum";

$product= array_product($a);
echo "<br/>$product";

//Inbuilt functions to debug an array
echo"<pre>";
print_r($a);
echo"<pre>";


echo"<pre>";
var_dump($a);
echo"<pre>";

foreach ($a as $value) 
{
    echo"<br/> Value is $value";
}

foreach ($a as $key => $value) 
{
    echo"<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}





