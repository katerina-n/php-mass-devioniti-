<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 09.07.2017
 * Time: 21:44
 */
$sek=0;
for($i=1; $i<=12; $i++){
    $days =$sek+ cal_days_in_month(CAL_GREGORIAN, $i, 2017);
}
$sekunda=$days*24*60*60;
echo $sekunda;
echo "<br>";
echo $sekunda%2;
?>