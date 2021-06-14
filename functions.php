<?php
include_once 'database/DB.php';
include_once 'database/Product.php';
require_once 'database/Cart.php';

$db=new DB();

$product = new Product($db);
$product_shuffle = $product->getData();

$Cart=new Cart($db);
