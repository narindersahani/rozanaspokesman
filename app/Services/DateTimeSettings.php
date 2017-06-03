<?php

namespace App\Services;

use Carbon\Carbon;

class DateTimeSettings
{
	
	public function getDBDateTimeFormat($value)
	{
		if(!$value) {
			return null;
		}

		$date = new Carbon($value);

		return $date->format('Y-m-d H:i:s');
	}

	public function getDBDateFormat($value)
	{
		if(!$value) {
			return null;
		}

		$date = new Carbon($value);

		return $date->format('Y-m-d');
	}

	public function convertDateTimeFormat($value)
	{
		if(!$value) {
			return null;
		}

		$date = new Carbon($value);

		return $date->format('d-m-Y H:i');
	}

	public function convertDateFormat($value)
	{
		if(!$value) {
			return null;
		}

		$date = new Carbon($value);

		return $date->format('d-m-Y');
	}

	public function getFormatedDate($value, $format = "d-m-Y")
	{
		$date = new Carbon($value);

		return $date->format($format);
	}
}