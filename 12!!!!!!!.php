<?php
/**
 * Created by PhpStorm.
 * User: Gateway
 * Date: 10.07.2017
 * Time: 19:48
 */


$menu = array(
    'Home' => '/',
    'About us' => '/about',
    'Products' => '/products',
    'Contact us' => '/contact'
);

foreach ($menu as $name => $link) : ?>
    <a href='<?=$link?>'><?=$name?></a>
<?php endforeach; ?>

