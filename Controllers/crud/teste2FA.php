
<?php
session_start();
// Definir o fuso horário para UTC-3
date_default_timezone_set('America/Sao_Paulo');
//faz a solicitação para conectar com o Banco
require_once "config.php";

//print_r($_SESSION);

//elementos da sessão:
$login = $_SESSION['loginLogin'];
$senha = $_SESSION['senhaLogin'];
$id = $_SESSION['id'];

//elementos da validação:
$nmae = $_POST['nmae'] ?? "";
$dtnascimento = $_POST['dtnascimento'] ?? "";
$cep = $_POST['cep'] ?? "";

print_r($_POST);

//Processando a operação de exclusão (delete) após a confirmação
// Aqui estou incluindo o arquivo de configuração

$sql = "SELECT nomeMae, dataNascimento, cep FROM usuários WHERE idUsuário = $id";

$result = $connection->query($sql);

$row = mysqli_fetch_array($result);

//print_r($row['nomeMae']);
//print_r($row['dataNascimento']);
//print_r($row['cep']);

if ($nmae == $row['nomeMae'] || $dtnascimento == $row['dataNascimento'] || $cep == $row['cep']) {
    //echo "<br>entrei no if";
    if (!empty($nmae)) {
        $pergunta = "Qual o nome da mãe?";
        $agora = new DateTime();
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, ?, ?, ?)";


        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'issssss',$id, $login, $pergunta, $nmae, $row['nomeMae'],$data,$hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
                header("location: ../../Views/index.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    } elseif (!empty($dtnascimento)) {
        $pergunta = "Qual a sua data de nascimento?";
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'issssss',$id, $login, $pergunta, $dtnascimento, $row['dataNascimento'],$data,$hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
                header("location: ../../Views/index.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    } elseif (!empty($cep)) {
        $pergunta = "Qual o seu Cep?";
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'issssss',$id, $login, $pergunta, $cep, $row['cep'],$data,$hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
                header("location: ../../Views/index.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    }
} else {
    if (!empty($nmae)) {
        $pergunta = "Qual o nome da mãe?";
        $agora = new DateTime();
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, null, ?, ?)";


        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'isssss',$id, $login, $pergunta, $nmae, $data,$hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
                header("location: ../../Views/Autenticação2FAview.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    } elseif (!empty($dtnascimento)) {
        $pergunta = "Qual a sua data de nascimento?";
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, null, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'isssss',$id, $login, $pergunta, $dtnascimento, $data, $hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                header("location: ../../Views/Autenticação2FAview.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    } elseif (!empty($cep)) {
        $pergunta = "Qual o seu Cep?";
        $data = date('Y/m/d');
        $hora = date('H:i:s');
        $sqli = "INSERT INTO erros2fa VALUES (?, ?, ?, ?, null, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $sqli)) {
            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'isssss',$id, $login, $pergunta, $cep, $data,$hora);

            // Execute a query já com os "prepared statement" ajustados
            if (mysqli_stmt_execute($stmt)) {
                // Comitar a transação
                mysqli_commit($connection);

                // Fecha o statement
                mysqli_stmt_close($stmt);

                // Fecha a conexão com o Banco de Dados
                mysqli_close($connection);

                header("location: ../../Views/Autenticação2FAview.php");
                exit();
            } else {
                mysqli_rollback($connection);
                header("location: error.php");
                exit();
            }
        } else {
            mysqli_rollback($connection);
            header("location: error.php");
            exit();
        }
    }
    //echo "entrei no else";
}

?>