<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 10/22/15
 * Time: 5:28 PM
 */

namespace Numbers;

class NumberIterator {

	private $_number;
	private $_intArray = array();

	public function __constructor($firstNumber) {
		$this->_number = $firstNumber;
	}

	public function getNumber() {
		return $this->_number;
	}

	public function createIntArray($lastNumber) {
		$this->_intArray[count($this->_intArray)] = $this->_number;
		if ($this->_number < $lastNumber) {
			$this->_number++;
			self::createIntArray($lastNumber);
		}
		return $this->_intArray;
	}
}