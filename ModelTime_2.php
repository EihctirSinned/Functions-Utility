<?php
class TIME
{
	public $result;
	public $ind;

	public function ConvertToSeconds(Time)
	{
		$w = strstr(Time, "w");
		$week = 604800;

		if(strstr(Time, "ind"))
		{
			$this->$ind = Time;
		}

		if($w == true)
		{
			$this->$result = ereg_replace("[^0-9]", "", $w);
			return $this->$result = $week*$result;
		} else if(Time != $this->$ind) {
			return $this->$result = Time*86400;
		} else {
			return $this->$result = 0;
		}
	}
}