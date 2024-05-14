<?php
// Aqui estou incluindo o arquivo de configuração
require_once "config.php";

// Variáveis inicializadas com valores vazios
$nome = $login = $senha = "";

// recupera o código do usuário (id) via GET.
$id =  trim($_GET["id"]);

// Prapara o select para trazer as informações do usuário.
$sql = "SELECT usu_nome, usu_login, usu_senha FROM Usuarios WHERE usu_codigo = ?";

if ($stmt = mysqli_prepare($connection, $sql)) {

    // liga as variáveis do "prepared statement" ao id passado por parâmetro
    mysqli_stmt_bind_param($stmt, "i", $param_id);

    // seta o parâmetro.
    $param_id = $id;

    // executa a consulta (prepared statement)
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            /* Aqui verifica se trouxe um row no resultset. 
                   Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            // Recupera cada valor do campo do row.
            $nome = $row["usu_nome"];
            $login = $row["usu_login"];
            $senha = $row["usu_senha"];
        } else {
            // Se na sua url não tiver um id válido. redireciona para a página de erro
            header("location: error.php");
            exit();
        }
    } else {
        header("location: error.php");
        exit();
    }
}

// Fecha o statement
mysqli_stmt_close($stmt);

// Fecha a conexão com o banco de dados.
mysqli_close($connection);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="styleregistro.php" />
    <title>Atualizando Usuário no Banco de Dados</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-image">
            <img src="../assets/img/logo-modavo-cpaas.png" alt="Form Image">
        </div>

        <form action="update.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Atualização de usuário</span>
                    <div class="fields">

                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="input-field">
                            Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
                        </div>

                        <div class="input-field">
                            Login:
                            <input type="text" name="login" value="<?php echo $login ?>">

                        </div>
                        <div class="input-field">
                            Senha:
                            <input type="text" name="senha" value="<?php echo $senha ?>">
                        </div>
                        <div class="input-field">
                            <input type="submit" value="Atualizar" style="color:white" class="btn btn-success">
                            <a href="consulta.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    </div>
</body>

</html>