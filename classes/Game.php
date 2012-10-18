<?php
class Game
{
	protected $frames = array();
	public function __construct()
	{
		for ($i = 0; $i <=10; $i++) {
			$this->frames[] = Frame::factory($i);
		}
	}
}
