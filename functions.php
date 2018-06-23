
<?php

/*
	Query que genera el llena de datos el array "arrayChannel"

	
	public function QueryChannels()
    {
        $query="select id, value from channel_properties";
        $rst = $this->Connect($this->database)->query($query);
        $row = $rst->fetch_all();
        $this->Disconnect();
        return $row;
    }

*/


  // el arrayChanel es un array de dos colunas la primera [0] es el id y la coluna [1] es la correspondiente a value 

$arrayChannel = $channel->QueryChannels();


foreach($arrayChannel as $vChannel)
{
	echo '<option selected value='. $vChannel[0].'>'.$vChannel[1] .'</option>';
}

//posible funcion 

public function CreateSelections($arrayChanel)
{
	$SelectOptions='';

	foreach($arrayChannel as $vChannel)
	{
		$SelectOptions.= '<option value='. $vChannel[0].'>'.$vChannel[1] .'</option>';
	}

	return $SelectOptions;
}

// implementacion de la funcion
?>

<div class="form-group">
	<select class="form-control" name="canal">
		<?php
			echo CreateSelections($arrayResultadosQuery);
		?>
	</select>
</div>