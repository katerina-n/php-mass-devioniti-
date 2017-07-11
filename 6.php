<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 09.07.2017
 * Time: 23:22
 */

$a=rand(1,10);
$b=rand(1,10);
echo "a= ".$a." b= ".$b;
$arr=[$a, $b];
$a=$arr[1];
$b=$arr[0];
echo "<br>";
echo "a= ".$a." b= ".$b;
echo "<br> Other <br>";
$a=rand(1,10);
$b=rand(1,10);
echo "a= ".$a." b= ".$b;
echo "<br>";
$a.=$b;
echo "a= ".$a{1}." b= ".$a{0};
?>