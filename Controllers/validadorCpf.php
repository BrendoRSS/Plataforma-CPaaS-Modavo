<?php 
require "../Models/CpfClass.php";

$resultado = CPF::validar("146.705.457-79");

var_dump($resultado);

?>