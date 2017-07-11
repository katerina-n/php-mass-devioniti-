<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 19:55
 *
 *
 * Создать алгоритм для
 * определения первого найденного простого числа в промежутке от 200 до 400.
 */

for($i=200; $i<=400; $i++){
    for($j=2; $j<=400; $j++) {
        if (($i % $j == 0) && ($i != $j)) {
            // echo "Ne prostoe chislo".$i ."<br>";
            break;
        } else {
            if (($i % $j == 0) && ($i == $j)) {
                echo "prostoe chislo" . $i . "<br>";
                exit();
            }
        }
    }


}


?>