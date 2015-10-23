<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 10/22/15
 * Time: 4:22 PM
 */

namespace Practice;
use Numbers;

require_once("NumberIterator.php");

class Practice {

	private $_number;
	private $_intArray = array();
	private $_numIt;

	public function __construct() {
		$this->_numIt = new Numbers\NumberIterator($this->_number);
	}

	public function getNumber() {
		return $this->_numIt->getNumber();
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
		$this->_intArray = $this->_numIt->createIntArray($finalValueOfNumber);
	}
}
