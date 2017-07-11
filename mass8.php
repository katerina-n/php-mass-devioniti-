<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 0:52
 */
$kol=0;
$kolvse=0;
for($x=1; $x<=9; $x++ ) {
    for ($i = 0; $i <= 9; $i++) {
        for ($j = 0; $j <= 9; $j++) {
            for ($k = 0; $k <= 9; $k++) {
                for ($l = 0; $l <= 9; $l++) {
                    for($m=0; $m<=9; $m++) {
                        $a = $x + $i  + $j;
                        $b = $k  + $l  + $m;
                        $kolvse++;
                        if ($a == $b) {
                            $kol++;
                            echo (string)$x. (string)$i. (string)$j .(string) $k  . (string)$l. (string)$m . "<br>";
                        }
                    }
                }
            }
        }
    }
}
$procentu=($kol/$kolvse)*100;
echo "{$kol}/{$kolvse} =  ".$procentu;
?>