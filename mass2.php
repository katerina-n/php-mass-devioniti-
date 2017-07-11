<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 23:39
 */
$j=0;
for($i=1; $i<=112; $i=$i+3){
    $arr[$j]=$i;
    $j++;
}
$sum=(($arr[0]+$arr[count($arr)-1])/2)*count($arr);
echo $sum;

?>