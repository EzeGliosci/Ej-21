<?php

require_once 'modelo/DatosPersona.php';

$p = new DatosPersona();
$p->Nombre = "Ezequiel";
$p->Apellido = "gliosci";
$p->Edad = 19;
$p->Email = "ezegliosci@gmail.com";

$p->MostrarPropiedades();
