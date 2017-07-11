<form action="mass1.php" method="get">
    <input type="text" name="number"/>
    <input type="submit"/>
</form>
<?php


//foreach ($_GET as $value){
       // echo "Silence is golden";

   // }
$str=implode($_GET);
if((int)$str)
{
    for($i=1; $i<=(int)$str; $i++){
        echo "Silence is golden <br>";
    }
}
else{
    echo "bad n";
}

?>