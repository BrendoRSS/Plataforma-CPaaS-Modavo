<?php
session_start();
// Aqui estou incluindo o arquivo de configuração
require_once "config.php";
    /*$_SESSION['loginLogin'] = $login;
    $_SESSION['senhaLogin'] = $senha;*/
    $novaSenha = $_POST['novaSenha'];
    $id = $_SESSION['id'];
    print_r($novaSenha);

    if(empty($novaSenha)){
        header('Location: atualizaSenhaView.php?erro=1');
    }elseif(preg_match('/\d/', $novaSenha)) {
        echo "O campo de texto contém números.";
        header('Location: atualizaSenhaView.php?erro=1');
    } else {
    //preparando o statement do comando update
    $sql = "UPDATE usuários SET Senha = ? WHERE idUsuário = ?";
    print_r($sql);
         
    if($stmt = mysqli_prepare($connection, $sql)){
		// liga as variáveis do "prepared statement" aos parâmetros que foram passados
        mysqli_stmt_bind_param($stmt, "si", $novaSenha, $id);
        
        // Execute a query já com os "prepared statement" ajustados
        if(mysqli_stmt_execute($stmt)){

            //comitar a transação
            mysqli_commit($connection);

            // fecha o statement
            mysqli_stmt_close($stmt);
            
            // fecha a conexão com o Banco de Dados
            mysqli_close($connection);
            
            // Se o usuário foi atualizado com sucesso, então redireciono para a página de consulta.
            header("location: ../../Views/index.php");
            exit();

        } else{
            header("location: error.php");
            exit();
        }
    }

    }
    
    
    
        
    ?>