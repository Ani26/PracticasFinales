<?php

function view($plantilla, $variables= array()){
    extract($variables);
    require('views/'.$plantilla.'.tpl.php');
}

function controller($nombre){
    if(empty($nombre))
        $nombre='login.asp';

    $archivo= "controllers/$nombre.php";

    if(file_exists($archivo))
         require($archivo);
     else
          echo"$archivo Error archivo no encontrado";
}