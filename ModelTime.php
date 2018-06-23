<?php
class TIME
{
	public function ConvertToSeconds(Time)
	{
		switch ($Time) 
		{
		    case "24":
		        return 24*3600;
		        break;
		    case "48":
		        return 48*3600;
		        break;
		    case "72":
		        return 72*3600;
		        break;
		    case "W":
		        return 7*24*3600;
		        break;
		    case "IND":
		    	//tiempo de alquiler por 10 años !!!!
		        return 10*365*3600;
		        break;
    	}
	}
}