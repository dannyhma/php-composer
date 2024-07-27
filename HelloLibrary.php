<?php

require_once __DIR__ . '/vendor/autoload.php';

use Himaone\LibraryComposer\Customer;

$customer = new Customer("Danny");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;
