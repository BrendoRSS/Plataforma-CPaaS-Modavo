<?php
    // ARQUIVO: CREATE.PHP - Aqui estou incluindo o arquivo de configuração
    require_once "config.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Inicializa os parâmetros

        $name = $_POST['fullName'] ?? '';
        $dateOfBirth = $_POST['dateOfBirth'];
        $gender = $_POST['gender'];
        $motherName = $_POST['motherName'];
        $cpf = $_POST['cpf'];
        $numberMobile = $_POST['numberMobile'];
        $phone = $_POST['phone'];
        $localization = $_POST['localization'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        $tipoUsuario = "1";
        /*
        // Validação básica no lado do servidor
        if (empty($name) || empty($login) || empty($dateOfBirth) || empty($gender) || empty($motherName) || empty($cpf) || empty($numberMobile) || empty($phone) || empty($localization) || empty($login) || empty($password)) {
            echo 'Todos os campos são obrigatórios.';
            exit;
        }
        */
        print_r($_POST);
        $sql = "INSERT INTO usuários VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($connection, $sql)){

            // liga as variáveis do "prepared statement" aos parâmetros que foram passados
            mysqli_stmt_bind_param($stmt, 'sss', $name, $dateOfBirth, $cpf, $gender, $motherName, $numberMobile, $phone, $localization, $bairro, $cidade, $estado, $numeroRedidencia, $complemento, $login, $password,$tipoUsuario);
            
            // Execute a query já com os "prepared statement" ajustados
            if(mysqli_stmt_execute($stmt)){
    
                //comitar a transação
                mysqli_commit($connection);
    
                // fecha o statement
                mysqli_stmt_close($stmt);
                
                // fecha a conexão com o Banco de Dados
                mysqli_close($connection);
    
                // Se o usuário foi inserido com sucesso, então redireciono para a página principal.
                header("location: index.php");
                exit();
            } else{
                header("location: error.php");
                exit();
            }
        }
       
        // preparando o statement do comando insert
        
    }
    
   
     
?>
