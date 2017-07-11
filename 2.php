<form action="2.php" method="get">
    <input type="text" name="name"/>
    <input type="text" name="email"/>
    <input type="text" name="message"/>
    <input type="submit"/>
</form>
<?php
$str=serialize($_GET);
echo $str;

?>