<?php
//Associative Array
//Key=Value
//Method 1
$a[0]=10;
$a['c']='Coding';
$a['php']='Server Side';
$a[10]="Ten";
$a[84]=57.85;

//Method 2
// Preferred while creating an array
$a= array(0=>10,"c"=>"coding",'php'=>'Server Side',10=>"ten");



//Print Values
echo "C for :".$a['c'];

foreach ($a as $value) 
{
    echo"<br/> Value is $value";
}

foreach ($a as $key => $value) 
{
    echo"<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

echo"<pre>";
print_r($a);
echo"<pre>";


echo"<pre>";
var_dump($a);
echo"<pre>";