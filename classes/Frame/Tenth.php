<?php
class Frame_Tenth extends Frame
{
	public function addRoll($number)
	{
		echo "tried adding $number to the tenth frame";
	}
	public function __construct()
	{
		$this->number = 10;
	}

	public function toDisplayRows()
	{
		return array(
			'--------',
			'  |  |  ',
			'  +--+--',
			'        ',
			'--------'
		);
	}
}
