<?php 

/**
*  Bishops 09/02/2017
*  CLase devuelve el mes en nombre de la fecha actual o una fecha ingresada en texto español
*/
class MonthDateSpanish
{
	private static $month = array(
				"Enero" => '01', 
				"Febrero" => '02',
				"Marzo" => '03',
				"Abril" => '04',
				"Mayo" => '05',
				"Junio" => '06',
				"Julio" => '07',
				"Agosto" => '08',
				"Septiembre" => '09',
				"Octubre" => '10',
				"Noviembre" => '11',
				"Diciembre" => '12'
				);


	//  Devuelve el mes de la fecha actual del sistema
	public static function MonthSystemDate()
	{
		$month_num = date("m", time());
		return array_search($month_num, self::$month);
	}

	//  Devuelve el mes de la fecha pasada como argumento de la funcion.
	// $mydate = String
	// $mydate formato "mm/dd/yyyy"
	public static function MonthSpecificDate($mydate)
	{
		$month_num = date("m", strtotime($mydate));
		return array_search($month_num, self::$month);
	}


}

// ejemplo de aplicacion  de los metodos de la clase.

/* 
echo "Mes de la fecha actual de sistema (".date("d/m/Y",time()).") es ". MonthDateSpanish::MonthSystemDate();
echo "<br>"."<br>";
echo "Mes de la fecha 12-Marzo-2016 [03/12/2016] (ingresada en formato americano [mm/dd/YYYY]) es ". MonthDateSpanish::MonthSpecificDate("03/12/2016"); 
*/





