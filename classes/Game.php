<?php
class Game
{
	protected $frames = array(), $currentFrame, $active, $score;
	public function __construct()
	{
		for ($i = 1; $i <=10; $i++) {
			$this->frames[] = Frame::factory($i);
		}
		$this->currentFrame = 0;
		$this->active = true;
	}

	public function getActive(){return $this->active;}

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

	public function addRoll($rollAmount)
	{
		$rollAmount = preg_replace(array('%x%i','%[\D]%'), array('10',''), $rollAmount);

		if (empty($rollAmount[0]) || $rollAmount < 0) {
			return false;
		}

		$this->frames[$this->currentFrame]->addRoll($rollAmount);

		$this->score+= $rollAmount;
		$this->frames[$this->currentFrame]->setScore($this->score);

		if ($this->frames[$this->currentFrame]->getIsFull()) {
			$this->currentFrame++;

			if ($this->currentFrame == count($this->frames) - 1) {
				$this->active = false;
			}
		}
	}
}
