<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 1:23
 */
$a=rand(1,18);
$b=rand(4,23);
$c=($a>=$b)?'"Maksimum= ".$a;':"Maksimum= ".$b;
echo $c;

?>