<?php
abstract class Frame
{
	protected $number, $rolls = array(), $score = 0;
	
	abstract public function addRoll($value);

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
