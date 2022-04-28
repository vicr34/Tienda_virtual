<?php

//LO IMPLEMENTADO SÓLO ES UNA PROPUESTA DE ORGANIZACIÓN, 
//RESPETANDO SU FORMA DE TRABAJO, PUEDEN AÑADIR, ELIMINAR O ACTUALIZAR HOJAS O ELEMENTOS
//SOLO SI LOS ELEMENTOS SON A CARGO O UTILIZADOS POR SU EQUIPO.

//** TIENEN LA LIBERTAD DE DESARROLLO MIENTRAS SE RESPETE LA FORMA "VISTA - CONTROLADOR" **.

//SI NECESITAN AYUDA U ORIENTACIÓN CON LAS UNIONES PUEDEN CONSULTARNOS 
//ATTE: ARQUITECTURA


require_once "controllers/gestion_comunicacion_contactoControlador.php";

$gestion_comunicacion_contacto = new ControladorGestion_comunicacion_contacto();
$gestion_comunicacion_contacto -> gestion_comunicacion_contacto ();
