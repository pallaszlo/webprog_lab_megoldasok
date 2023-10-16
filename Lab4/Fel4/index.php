<?php

//namespace Lab4\Fel4;
//https://tutorials.supunkavinda.blog/php/oop-autoloading

/*
require 'Model/Customer.php';
require 'Model/Product.php';
require 'Utils/Logger.php';
require 'Database/Logger.php';
*/

require 'functions.php';

use Model\{Customer, Product};
use Utils\Logger;
use Database\Logger as DatabaseLogger;

$customer = new Customer('Bob');
echo $customer->getName();

$product = new Product();

$loggers = [
    new Logger(),
    new DatabaseLogger()
];

$publish_at = new \DateTime();

echo $publish_at->format('Y-m-d H:i:s');
