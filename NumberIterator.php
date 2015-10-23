<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 10/22/15
 * Time: 5:28 PM
 */

class NumberIterator {

	public function __constructor() {
	}

	public function createIntArray($finalValueOfNumber) {
		$this->_intArray[count($this->_intArray)] = $this->_number;
		if ($this->_number < $finalValueOfNumber) {
			$this->_number++;
			self::createIntArray($finalValueOfNumber);
		}
	}
}