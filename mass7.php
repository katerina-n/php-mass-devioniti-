<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 0:49
 */
$a=rand(0,100);
$b=rand(0,100);
$c=rand(0,100);
if(($a!=$b)&&($b!=$c)&&($c!=$a)){
    echo $a." ".$b." ".$c;
}


?>