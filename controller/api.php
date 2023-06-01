<?php
require_once("../model/gestionBienestar.php");

$objplatos = new gestionBienestar();

$todosplatos = $objplatos->consultarPlatosApi();

echo json_encode($todosplatos);