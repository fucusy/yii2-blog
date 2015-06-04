<?php
/**
 * ZHtml class file.
 *
 */


/**
 * ZHtml is a static customized  class  like CHtml 
 * that provides a collection of helper methods for creating HTML views.
 */
class ZHtml
{

	/**
	 * Generates a drop down list with selection tag.
	 * @param array $data data for generating the list options (value=>display).
	 */
	public static function listOptions($data)
	{
		$content = '';
		foreach ($data as $value => $display) {
			$content = $content.CHtml::tag('option',array('value'=>$value),$display);
		}
		return $content;
	}
	
	/**
	 * Get year list indexed by year, and display year too from 2012 to now,
	 * @return array, indexed by year, and display year too from 2012 to now,
	 */
	public static function getYearList()
	{
		$yearList = array();
		for($i = 2013; $i <=  date("Y",time()); $i++)
			$yearList[$i]=$i;
		
		return $yearList;
	}
	/**
	 * Get month list indexed by month number, and diplay the month number too from 1 to 12
	 * @return array, indexed by month number, and diplay the month number too from 1 to 12
	 */
	public static function getMonthList()
	{
		$monthList = array();
		for($i = 1; $i <= 12; $i++)
			$monthList[$i] = $i;
		return $monthList;
	}
	
	/**
	 * Multiple delimiter explode
	 * @param array, delimiters, the array of delimiter
	 * @param string, string, the string you want to explode
	 * @return array, the array after explode
	 */
	public static function multiexplode($delimiters,$string) 
	{
    	$ready = str_replace($delimiters, $delimiters[0], $string);
    	$launch = explode($delimiters[0], $ready);
    	return  $launch;
	}
	/**
	 * Translate timestamp to formate time string
	 * @param int, timestamp
	 * @return string, the formatted time 
	 */
	public static function formatTimestamp($timestamp)
	{
		return date("Y/m/d H:i:s",$timestamp);
	}
	/**
	 * Displays a summary of validation errors for one or several models.
	 * @param mixed $model the models whose input errors are to be displayed. This can be either
	 * a single model or an array of models.
	 * @return string the error summary. Empty if no errors are found.
	 * @see CModel::getErrors
	 */
	public static function errorSummary($model,$header=null,$footer=null,$htmlOptions=array())
	{
		$content='';
		if(!is_array($model))
			$model=array($model);
		if(isset($htmlOptions['firstError']))
		{
			$firstError=$htmlOptions['firstError'];
			unset($htmlOptions['firstError']);
		}
		else
			$firstError=false;
		foreach($model as $m)
		{
			foreach($m->getErrors() as $errors)
			{
				foreach($errors as $error)
				{
					if($error!='')
						$content.="$error\n";
					if($firstError)
						break;
				}
			}
		}
		return $content;
	}
	/**
	 * Get the month number betwween the time
	 * @param int $start_year
	 * @param int $start_month
	 * @param int $end_year
	 * @param int $end_month
	 * @return int , the number of month
	 */
	public static function getMonthNumber($start_year, $start_month , $end_year, $end_month)
	{
		return ($end_year - $start_year )* 12 + $end_month - $start_month + 1;
	}
	
	/**
	 * Get the day number betwween the time
	 * @param int $start_year
	 * @param int $start_month
	 * @param int $end_year
	 * @param int $end_month
	 * @return int , the number of month
	 */
	public static function getDayNumber($start_year, $start_month , $end_year, $end_month)
	{
		$day = 0;
		
		for($year = $start_year; $year <= $end_year; $year++ )
		{
			if( $year > $start_year && $year < $end_year )
			{
				for( $month = 1; $month <= 12; $month ++ )
				{
					$day += cal_days_in_month(CAL_GREGORIAN, $month, $year);	
				}
			}else if( $year == $start_year && $year == $end_year )
			{
				for( $month = $start_month; $month <= $end_month; $month ++ )
				{
					$day += cal_days_in_month(CAL_GREGORIAN, $month, $year);	
				}
			}else if( $year == $start_year && $year < $end_year )
			{
				for( $month = $start_month; $month <= 12; $month ++ )
				{
					$day += cal_days_in_month(CAL_GREGORIAN, $month, $year);	
				}
			}else if( $year == $end_year && $year > $start_year )
			{
				for( $month = $end_month; $month >= 1; $month -- )
				{
					$day += cal_days_in_month(CAL_GREGORIAN, $month, $year);	
				}
			}
		}
		return $day;
	}
	/**
	 * 把20140101转换成2014-01-01 
	 *
	 * @param string $date
	 */
	public static function formatDate($date)
	{
		return substr($date, 0,4)."-".substr($date, 4,2)."-".substr($date, 6,2);
	}
}
