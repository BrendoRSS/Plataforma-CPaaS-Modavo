<?php
// Aqui estou incluindo o arquivo de configuração
require_once "config.php";

// Preparando o statement do comando select
$sql = "SELECT Nome, Login, Senha FROM Usuários WHERE idUsuário = ?";

if ($stmt = mysqli_prepare($connection, $sql)) {
    // liga as variáveis do "prepared statement" ao id passado por parâmetro
    mysqli_stmt_bind_param($stmt, "i", $param_id);

    // seta o parâmetro.
    $param_id = trim($_GET["idUsuário"]);

    // executa a consulta (prepared statement)
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            /* Aqui verifica se trouxe um row no resultset. 
				Neste caso não precisa fazer um loop já que garantiremos que vai trazer só 1 usuário*/
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            // Recupera cada valor do campo do row.
            $nome = $row["Nome"];
            $login = $row["Login"];
            $senha = $row["Senha"];
        } else {
            // Se na sua url não tiver um id válido. redireciona para a página de erro
            header("location: error.php");
            exit();
        }
    } else {
        echo "Oops! Algo deu errado. Tente de novo.";
    }
}

// Fecha o statement
mysqli_stmt_close($stmt);

// Fecha a conexão com o banco de dados.
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.php" />
    <title>Visualizar</title>
</head>

<body>
    <div class="container" id="container">

        <div class="form-image" style="margin-top:20px;margin-bottom:20px">
            <img src="../../assets/img/logo-modavo-cpaas.png" alt="Form Image" width="200px" >
        </div>

        <form class="form">
            <div class="form first">
                <div class="details personal mt-5">
                    <h1 class="title">Informações de usuário:</h1>
                    <br>
                    <div class="fields mt-3">
                        <div class="input-field">
                        <label for="">Nome:</label>
                        <input class="form-control" type="text" value="<?php echo $nome ?>"disabled>
                        </div>
                        <div class="input-field">
                        <label for="">Login:</label>
                        <input class="form-control" type="text" value="<?php echo $login ?>"disabled>
                        </div>
                        <div class="input-field">
                        <label for="">Senha:</label>
                        <input class="form-control" type="text" value="<?php echo $senha ?> "disabled>
                        </div>
                        <br>
                        <div class="input-field">
                        <a href="consulta.php" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>
                </div>
        </form>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../assets/vendor/aos/aos.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
</body>

</html>