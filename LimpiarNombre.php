<?php

/*Transforma una cadena de nombres en nombres propios 
y elimina los espacios en blanco dejando un solo 
espacio entre nombre*/ 

echo ClearName("daniel spertuto")."<br>";
echo ClearName("    dario     espressss   ")."<br>";

function ClearName($name) 
{
	$cleanName='';
	$space = 0;
	//$name = "  12345  6789   ";
	$name = rtrim(ltrim($name));
	$arrayName= str_split($name);

	$cant=count($arrayName);

	for ($i=0; $i < $cant; $i++) 
	{ 
			if($arrayName[$i] <> ' ')
			{
				$cleanName.=$arrayName[$i];
			}

			if ($i<$cant-1)
			{
				if($arrayName[$i] <> ' ' && $arrayName[$i+1] == ' ')
				{
					$cleanName.=$arrayName[$i+1];
				}
			}
	}
	
	return ucwords($cleanName);
}
?>