<?php
/**
 * 팩토리(Factory)
 */
require "factory.php";
require "LgProduct.php";
require "ProductFactory.php";

$fac = new ProductFactory;
$pro = $fac->create();
$pro->name();