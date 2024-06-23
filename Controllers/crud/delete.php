<?php
    // Processando a operação de exclusão (delete) após a confirmação
    // Aqui estou incluindo o arquivo de configuração
    require_once "config.php";

    $id = $_GET['idUsuário'];
    
    $sqli = "SELECT statusDeUsuario FROM usuários WHERE idUsuário = $id"; 
    
    $result = $connection->query($sqli); 
    
    $row = mysqli_fetch_array($result); 
    
    if($row['statusDeUsuario'] == "Ativo"){
        $statusDeUsuario = "Inativo";
    }else{
        $statusDeUsuario = "Ativo";
    }

   
    // Preparando o delete statement
    $sql = "UPDATE usuários SET statusDeUsuario = ? WHERE idUsuário = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // seta o parâmetro.
        $param_id = $_GET["idUsuário"];
        // liga as variáveis do "prepared statement" ao id passado por parâmetro
        mysqli_stmt_bind_param($stmt, "si", $statusDeUsuario, $param_id);
        
        
        // executa a consulta (prepared statement)
        if(mysqli_stmt_execute($stmt)){

            //comitar a transação
            mysqli_commit($connection);

            // Fecha o statement
            mysqli_stmt_close($stmt);
            
            // Fecha a conexão com o banco de dados.
            mysqli_close($connection);

            // Registro deletado com sucesso. Redireciona para a página de consulta.
            header("location: consulta.php");
            exit();
        } else{
            header("location: error.php");
            exit();
        }
    }
     

?>