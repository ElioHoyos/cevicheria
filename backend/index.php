<?php 
//controllers
require_once "controllers/plantilla.php";
require_once "controllers/enlaces.php";

// models
require_once "models/enlaces.php";

// instanciamos
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();