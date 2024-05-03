<?php


$cpfCadastro = INPUT_POST["cpfCadastro"];
$loginCadastro = INPUT_POST["loginCadastro"];
$senhaCadastro = INPUT_POST[ "senhaCadastro" ];

$cli = new Usuario ($cpfCadastro, $loginCadastro, $senhaCadastro );

var_dump ($cli);

?>