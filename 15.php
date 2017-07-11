<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 20:24
 *
 * Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 */

function mass(Array$a){
    echo "<pre>";
    print_r($a);
    echo"</pre>";
}
for($i=1; $i<=10; $i++) {
    $arr[$i]=rand(2,15);
}

mass($arr);

?>