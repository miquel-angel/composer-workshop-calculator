<?php

namespace Emmetog\Calculator;

class Calculator
{
	public function add( $firstNumber, $secondNumber )
	{
		return $firstNumber + $secondNumber;
	}
	
	public function subtract( $minuend, $subtrahend )
	{
		return $minuend - $subtrahend;
	}
	
	public function multiply( $firstFactor, $secondFactor )
	{
		return $firstFactor * $secondFactor;
	}
	
	public function devide( $numerator, $denominator )
	{
		return $numerator / $denominator;
	}
	
}

?>
