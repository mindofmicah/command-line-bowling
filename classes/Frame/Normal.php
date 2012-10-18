<?php
class Frame_Normal extends Frame
{
	const MAX_ROLLS = 2;

	public function addRoll($number)
	{
		if(count($this->rolls) == self::MAX_ROLLS) {
			throw new Exception('Cannot and roll');
		}

		$this->rolls[] = $number;

		if(count($this->rolls) == self::MAX_ROLLS) {
			$this->isFull = true;
		}

		echo 'trying to add ' . $number . " to a normal frame ($this->number)\n";
	}
	public function __construct($number)
	{
		$this->number = $number;
	}

	public function toDisplayRows()
	{
		return array('-----','  |  ','  +--','     ','-----');
	}
}
