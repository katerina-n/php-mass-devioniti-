<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 21:00
 * Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 * В зависимости от значения второго аргумента
 * функции, выводить используя var_dump или print_r. По умолчанию
 * использовать print_r
 */
function mass(Array$a, $b=false){
if($b==true){
    echo "<pre>";
    var_dump($a);
    echo "</pre>";
}
else{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
}

for($i=1; $i<=10; $i++) {
    $arr[$i]=rand(2,15);
}

mass($arr, false);


?>