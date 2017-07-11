<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 18:57
 * Создать алгоритм определения всех простых чисел в промежутке
 * от 1 до 100 при помощи for. Простое число - это число которое делится
 * только на себя и на 1
 */
for($i=1; $i<=100; $i++){
    for($j=2; $j<=100; $j++){
        if(($i%$j==0)&&($i!=$j)){
          // echo "Ne prostoe chislo".$i ."<br>";
         break;
        }
        else{
            if(($i%$j==0)&&($i==$j)) {
                echo "prostoe chislo" . $i . "<br>";
                break;
            }
        }
    }
}
?>