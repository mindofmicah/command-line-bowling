<?php
abstract class Frame
{
	protected $number, $rolls = array(), $score = 0, $isFull = false, $displayedScore = 0;
	
	abstract public function addRoll($value);

	public function setScore($score){
		$this->displayedScore = $score;return $this;
	}
	public function getScore(){return $this->score;}

	public function getIsFull(){return $this->isFull;}
	public static function factory($frameNumber)
	{
		$frameNumber = intval($frameNumber);
		if ($frameNumber == 10) {
			return new Frame_Tenth();
		} elseif($frameNumber < 10 && $frameNumber > 0) {
			return new Frame_Normal($frameNumber);
		} else {
			return null;
		}
	}
}
