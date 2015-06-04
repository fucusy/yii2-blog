<?php
class Algorithm
{
	/**
	 * 
	 * 把数字映射成大写字母，一般在Excel中会用到
	 * 0对应A,1对应B,依此类推
	 * 
	 * @param int $number
	 * @param char
	 */
	public static function numberToChar($number)
	{
		$char = 'A';
		$charMap = array('A','B','C','D','E','F','G','H','I','J','K'
						,'L','M','N','O','P','Q','R','S','T','U','V'
						,'W','X','Y','Z');
		if( $number >= 0 && $number < 36 )
		{
			$char = $charMap[$number];
		}
		return $char;
	} 	
}