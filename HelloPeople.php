<?php

require_once __DIR__ . '/vendor/autoload.php';

use Himaone\PhpComposer\Data\People;

$people = new People("Danny");

echo $people->sayHello("Budi") . PHP_EOL;
