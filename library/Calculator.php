<?php
/**
 * Calculator
 * @author slavey
 *
 */
class Calculator 
{
	/**
	 * Adds two numbers
	 * @param float $a
	 * @param float $b
	 * @return float
	 * 
	 * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
	 */
	public function plus($a, $b) 
	{
		return $a+$b;
	}
	
	/**
	 * Substracts two numbers
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public function minus($a, $b)
	{
		return $a-$b;
	}
}