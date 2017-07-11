<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 09.07.2017
 * Time: 22:57
 */

$a=false;
$b=true;
if( $a && $b || $a && $b || !$a && $b){
    echo "vupolniaetsia";
}
else{
    echo "ne vupolniaetsia";
}
echo "<br>";
$x=rand(2,19);
if($x%2){
    echo "true";
}
else{
    echo "false";
}
?>