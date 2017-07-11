<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 19:25

Создать массив из 10 любых числовых значений.
 * При помощи foreach вывести на экран те значения, которые делятся на 3
 */
for($i=1; $i<=10; $i++){
    $arr[$i]=rand(1,30);
}
    print_r($arr);
echo "<br>";
foreach ($arr as $value){
    if($value%3==0){
        echo $value."<br>";
    }
}

?>