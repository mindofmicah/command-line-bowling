<?php
class Game
{
	protected $frames = array(), $currentFrame;
	public function __construct()
	{
		for ($i = 1; $i <=10; $i++) {
			$this->frames[] = Frame::factory($i);
		}
		$this->currentFrame = 0;
	}

	public function displayScoreBoard() {

		$lines = array();
		foreach ($this->frames as $frame) {

			$rows = $frame->toDisplayRows();
			foreach ($rows as $index => $row) {
				$lines[$index][] = $row;
			}
		}
		
		$ret = '';
		for ($i = 0, $numLines = count($lines); $i < $numLines; $i++) {
			$ret.=  ($i == 0 || $i == $numLines-1?'+':'|')
				.   implode(($i == 0 || $i == $numLines-1?'+':'|'),$lines[$i]) .  
  ($i == 0 || $i == $numLines-1?'+':'|')

				    . "\n";
		}
		return $ret;
	}
}
