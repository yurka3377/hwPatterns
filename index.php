<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Lifo;
use App\LifoInt;

$stack1 = Lifo::getInstance();
$stack2 = Lifo::getInstance();

$stack1->push(1);
$stack1->push("2");
$stack1->push(3);

echo $stack2->pop().PHP_EOL;
echo $stack2->pop().PHP_EOL;
echo $stack2->pop().PHP_EOL;



$stackInt = new LifoInt($stack1);
$stackInt->push(10);
$stackInt->push(20);
echo $stackInt->pop().PHP_EOL;
echo $stackInt->pop().PHP_EOL;




