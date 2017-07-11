<form action="mass4.php" method="get">
    <input type="text" name="number"/>
    <input type="text1" name="number1"/>
    <input type="submit"/>
</form>

<?php

$str=implode(" ",$_GET);
$arr=explode(" ", $str);
$summa=0;
if(((int)$arr[0])&&((int)$arr[1])){
   for($i=(int)$arr[0]; $i<=(int)$arr[1]; $i++ ){
       $summa=$summa+$i;
   }
   echo $summa;
}
else{
    echo "Bad a,b ";
}




?>