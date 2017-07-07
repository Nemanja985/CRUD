<?php

namespace src\cla;

class Validation
{
	public function check_empty($data, $fields)
	{
		$msg = null;
		foreach ($fields as $value) {
			if (empty($data[$value])) {
				$msg .= "$value field empty <br />";
			}
		} 
		return $msg;
	}
	
	public function are_days_valid($days)
	{
		//if (is_numeric($age)) {
		if (preg_match("/^[0-9]+$/", $days)) {
			return true;
		} 
		return false;
	}
}
?>
