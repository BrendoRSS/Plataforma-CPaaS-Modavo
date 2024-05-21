<?php
    // ARQUIVO: CREATE.PHP - Aqui estou incluindo o arquivo de configuração
    require_once "config.php";
 
 
	// preparando o statement do comando insert
    $sql = "INSERT INTO usuarios VALUES (null, ?, ?, ?)";
     
    if($stmt = mysqli_prepare($connection, $sql)){

		// liga as variáveis do "prepared statement" aos parâmetros que foram passados
        mysqli_stmt_bind_param($stmt, 'sss', $param_nome, $param_login, $param_senha);
        
        // Inicializa os parâmetros
        $param_nome = $_POST["nome"];
        $param_login = $_POST["login"];
        $param_senha = $_POST["senha"];
        
        // Execute a query já com os "prepared statement" ajustados
        if(mysqli_stmt_execute($stmt)){

            //comitar a transação
            mysqli_commit($connection);

            // fecha o statement
            mysqli_stmt_close($stmt);
            
            // fecha a conexão com o Banco de Dados
            mysqli_close($connection);

            // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
            header("location: consulta.php");
            exit();
        } else{
            header("location: error.php");
            exit();
        }
    }
     
?>
