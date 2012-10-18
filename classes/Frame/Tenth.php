<?php
class Frame_Tenth extends Frame
{
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
