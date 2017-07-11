<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 0:32
 */
for($i=0; $i<=9; $i++){
    for($j=0; $j<=9; $j++){
        for($k=0; $k<=9; $k++){
            for($l=0; $l<=9; $l++){
                if (($i!=3)&&($j!=3)&&($k!=3)&&($l!=3)&&($l!=0)&&($l!=5)) {
                    $sum = 1000*$i+100 * $j + 10 * $k + $l;
                    echo $sum . "<br>";
                }
            }
        }
    }
}

?>