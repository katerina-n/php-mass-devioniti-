<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 21:23
 *Создать функцию, которая принимает один
 * аргумент в виде массива и дописывает
 * в него последним элементом количество значений массива
 *
 *
 */
function mass(Array &$a){
    $c=count($a);
    array_push($a, $c);
    print_r($a);
}
for($i=1; $i<=10; $i++) {
    $arr[$i]=rand(2,15);
}
mass($arr);


?>