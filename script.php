<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 10/22/15
 * Time: 7:52 PM
 */

require_once("Practice.php");

if (count($argv) < 3) {
echo "practice usage: php -f Practice.php 'starting value' 'final value'\n";
exit(1);
} else if (!is_numeric($argv[1]) && !is_numeric($argv[2])) {
echo "starting value and final value must be of type int\n";
exit(1);
}

$practice = new Practice\Practice();
$practice->setNumber($argv[1]);
$practice->createIntArray($argv[2]);
echo $practice->getNumber() . "\n";
$intArray = $practice->getIntArray();
foreach ($intArray as $number) {
echo $number . "\n";
}

