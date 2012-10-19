<?php
class Frame_Normal extends Frame
{
	const MAX_ROLLS = 2;

	public function addRoll($number)
	{
		if(count($this->rolls) == self::MAX_ROLLS) {
			throw new Exception('Cannot and roll');
		}

		if (count($this->rolls) == 1) {
			if ($this->rolls[0] + $number > 10) {
				throw new Exception('cannot add roll');
			} elseif ($this->rolls[0] + $number == 10) {
				$this->rolls[] = '/';
			} else {
				$this->rolls[] = $number;
			}
		} else {
			$this->rolls[] = $number;
		}
		if(count($this->rolls) == self::MAX_ROLLS) {
			$this->isFull = true;
		}
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

		return array(
			str_repeat('-', 2*self::MAX_ROLLS + 1), 
			substr($row2,1), 
			'  ' . $row3, 
			str_pad($this->displayedScore,(2*self::MAX_ROLLS + 1),' ', STR_PAD_LEFT),
			str_repeat('-', 2*self::MAX_ROLLS+1)
		);
	}
}
