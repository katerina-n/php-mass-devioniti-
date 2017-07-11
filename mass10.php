<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 11.07.2017
 * Time: 1:16
 */
$arr1=[];
$arr2=[];
$arr3=[];
$arr4=[];
$arr5=[];
$arr6=[];
$arr7=[];
for($x=0; $x<=2; $x++ ) {
    for ($i = 0; $i <= 2; $i++) {
        for ($j = 0; $j <= 2; $j++) {
            if (($i + $j + $x) == 0) {
                array_push($arr1, (string)$i . (string)$j . (string)$x);
            } else {
                if (($i + $j + $x) == 1) {
                    array_push($arr2, (string)$i . (string)$j . (string)$x);
                } else {
                    if (($i + $j + $x) == 2) {
                        array_push($arr3, (string)$i . (string)$j . (string)$x);
                    } else {
                        if (($i + $j + $x) == 3) {
                            array_push($arr4, (string)$i . (string)$j . (string)$x);
                        } else {
                            if (($i + $j + $x) == 4) {
                                array_push($arr5, (string)$i . (string)$j . (string)$x);
                            } else {
                                if (($i + $j + $x) == 5) {
                                    array_push($arr6, (string)$i . (string)$j . (string)$x);
                                } else {
                                    if (($i + $j + $x) == 6) {
                                        array_push($arr7, (string)$i . (string)$j . (string)$x);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
foreach ($arr1 as $value){
    echo $value." ";
}
echo "<br>Kolichestvo elementov ".count($arr1);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr1), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr1), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr1), 1)+substr_count(implode($arr1), 2));


foreach ($arr2 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr2);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr2), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr2), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr2), 1)+substr_count(implode($arr2), 2));



foreach ($arr3 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr3);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr3), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr3), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr3), 1)+substr_count(implode($arr3), 2));


foreach ($arr4 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr4);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr4), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr4), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr4), 1)+substr_count(implode($arr4), 2));



foreach ($arr5 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr5);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr5), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr5), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr5), 1)+substr_count(implode($arr5), 2));




foreach ($arr6 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr6);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr6), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr6), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr6), 1)+substr_count(implode($arr6), 2));





foreach ($arr7 as $value){
    echo "<br>".$value." ";
}
echo "<br>Kolichestvo elementov ".count($arr7);
echo "<br>Kolichestvo 1 elementov ".substr_count(implode($arr7), 1);
echo "<br>Kolichestvo 2 elementov ".substr_count(implode($arr7), 2);
echo "<br>Kolichestvo nenylevux elementov ".(substr_count(implode($arr7), 1)+substr_count(implode($arr7), 2));



?>