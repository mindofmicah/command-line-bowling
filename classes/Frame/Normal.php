<?php
class Frame_Normal extends Frame
{
	public function __construct($number)
	{
		$this->number = $number;
	}

	public function toDisplayRows()
	{
		return array('-----','  |  ','  +--','     ','-----');
	}
}
