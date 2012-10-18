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
		$row2 = '';
		$row3 = '';
		for ($i = 0; $i < self::MAX_ROLLS; $i++) {
			if (array_key_exists($i, $this->rolls)) {
				$row2.= '| ' . $this->rolls[$i];
			} else {
				$row2.= '|  ';
			}
			if($i > 0)
			$row3 .= '+--';
		}
		return array('-----', substr($row2,1), '  ' . $row3,'     ','-----');
	}
}
