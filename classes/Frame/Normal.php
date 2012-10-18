<?php
class Frame_Normal extends Frame
{
	public function addRoll($number)
	{
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
