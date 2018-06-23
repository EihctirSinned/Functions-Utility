<?php

$diccionario = array(
'Título de la Página'=>'¡Bienvenidos a Allrockets!',
'keywords'=>'Red Social, Diversion, Entretenimiento, Buenos Aires, La Plata, Lanús',
'description'=>'Un lugar diferente, para hacer amigos y algo más...',
'bootstrap'=> 'Views/css/bootstrap.css',
'sticky-footer'=>'Views/css/sticky-footer.css',
'custom'=>'Views/css/custom.css',
);


    $template = file_get_contents('template.php');

foreach ($diccionario as $clave=>$valor) {
$template = str_replace('{'.$clave.'}', $valor, $template);
}

echo $template;