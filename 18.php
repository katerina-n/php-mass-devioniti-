<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 21:31
 *
 * Реализовать функцию, которая определяет, будет ли число простым числом
 */
function simple($a){
    for($j=2; $j<=($a/2); $j++) {
        if ($a % $j == 0 ) {
            echo "Ne prostoe chislo ".$a ."<br>";
            exit();
        } else {
           continue;
            }
        }
        echo "Prostoe chislo ".$a;
}

simple(103);

?>