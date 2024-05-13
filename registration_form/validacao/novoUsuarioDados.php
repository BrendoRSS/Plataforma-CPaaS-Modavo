<?php
include_once "clienteClasses.php";

$cpfCadastro = $_POST["cpfCadastro"];
$loginCadastro = $_POST["loginCadastro"];
$senhaCadastro = $_POST[ "senhaCadastro" ];
/*
$usuario = new Usuario ($loginCadastro, $senhaCadastro, $cpfCadastro);
*/

// ARRAY DE ERROS
$erros = [];

//SANITIZAR
$loginCadastro = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);




?>