<?php
require_once "../registroView.php";

$cpfCadastro = $_POST["cpfCadastro"];
$loginCadastro = $_POST["loginCadastro"];
$senhaCadastro = $_POST[ "senhaCadastro" ];

$cli = new Usuario ($cpfCadastro, $loginCadastro, $senhaCadastro );

var_dump ($cli);

?>