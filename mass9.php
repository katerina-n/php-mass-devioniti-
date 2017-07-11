<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 1:08
 */
$count=0;
for($i=1; $i<=100; $i++){
    for($j=1; $j<=100; $j++){
        for($k=1; $k<=100; $k++){
            if($i*$i==($j*$j+$k*$k)){
                echo $i." ". $j." ". $k. "<br>";
             $count++;
            }
        }
    }
}
echo "Kolichestvo priamoygol'nux s storonami  ".$count;




?>