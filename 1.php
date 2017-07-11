<form action="1.php" method="get">
    <input type="text" name="name"/>
    <input type="text" name="email"/>
    <input type="text" name="phone"/>
    <input type="submit"/>
</form>
<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';
?>
