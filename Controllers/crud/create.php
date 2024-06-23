<?php
require_once "config.php";

// Inicializa os parâmetros
$name = $_POST['fullName'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$motherName = $_POST['motherName'];
$cpf = $_POST['cpf'];
$numberMobile = $_POST['numberMobile'];
$phone = $_POST['phone'];
$cep = $_POST['localization'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$login = $_POST['login'];
$password = $_POST['password'];
$tipoUsuario = "1";
$statusDeUsuario = "Ativo";

// Inicia uma transação
mysqli_begin_transaction($connection);

$sql = "INSERT INTO usuários VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if($stmt = mysqli_prepare($connection, $sql)){
    // liga as variáveis do "prepared statement" aos parâmetros que foram passados
    mysqli_stmt_bind_param($stmt, 'sssssssissssssssss', $name, $dateOfBirth, $cpf, $gender, $motherName, $numberMobile, $phone, $cep, $logradouro, $bairro, $cidade, $estado, $numero, $complemento, $login, $password, $tipoUsuario, $statusDeUsuario);

    // Execute a query já com os "prepared statement" ajustados
    if(mysqli_stmt_execute($stmt)){
        // Comitar a transação
        mysqli_commit($connection);

        // Fecha o statement
        mysqli_stmt_close($stmt);

        // Fecha a conexão com o Banco de Dados
        mysqli_close($connection);

        // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
        header("location: ../Views/loginView.php");
        exit();
    } else{
        mysqli_rollback($connection);
        header("location: error.php");
        exit();
    }
} else {
    mysqli_rollback($connection);
    header("location: error.php");
    exit();
}
?>