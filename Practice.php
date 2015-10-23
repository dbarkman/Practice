<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 10/22/15
 * Time: 4:22 PM
 */

if (count($argv) < 3) {
	echo "practice usage: php -f Practice.php 'starting value' 'final value'\n";
	exit(1);
} else if (!is_numeric($argv[1]) && !is_numeric($argv[2])) {
	echo "starting value and final value must be of type int\n";
	exit(1);
}

$practice = new Practice();
$practice->setNumber($argv[1]);
$practice->createIntArray($argv[2]);
echo $practice->getNumber() . "\n";
$intArray = $practice->getIntArray();
foreach ($intArray as $number) {
	echo $number . "\n";
}

class Practice {

	private $_number;
	private $_intArray = array();

	public function __construct() {
	}

	public function getNumber() {
		return $this->_number;
	}
	public function setNumber($number) {
		$this->_number = $number;
	}

	public function getIntArray() {
		return $this->_intArray;
	}
	public function setIntArray($intArray) {
		$this->_intArray = $intArray;
	}

	public function createIntArray($finalValueOfNumber) {
		$this->_intArray[count($this->_intArray)] = $this->_number;
		if ($this->_number < $finalValueOfNumber) {
			$this->_number++;
			self::createIntArray($finalValueOfNumber);
		}
	}
}
