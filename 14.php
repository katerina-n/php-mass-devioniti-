<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 20:14
 *
 *Создать текстовый файл, в котором будет 10 строк.
 * В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток

 *
 */


$f=fopen('texted.txt', 'w');
$a=11;
for($i=1; $i<=10; $i++) {
    $a=$i*11;
    fwrite($f, 'Add '. $a.PHP_EOL );
    }
    fclose($f);

?>