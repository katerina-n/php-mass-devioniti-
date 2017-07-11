<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 18:52
 */
$a=rand(1,30);
$b=rand(1,30);
switch($a) {
    case($a > $b):
        echo "Max= " . $a;
        break;
    case($a = $b):
        echo $a . "=" . $b;
        break;
    case($a < $b):
        echo "Max= " . $b;
        break;
}
?>
