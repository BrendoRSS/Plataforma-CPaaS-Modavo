<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" type="text/css" href="style.php" />
    <link rel="stylesheet" type="text/css" href="styleregistro.php" />
    <title>Consulta</title>
</head>

<body>
    <div class="container">
    <div class="form-image">
            <img src="../assets/img/logo-modavo-cpaas.png" alt="Form Image">
        </div>
        <div class="row">
            <div class="details personal mb-5">
                <h1 class="title">Usuários</h1>
            </div>
            <div class="col-6-md-12" style="display:flex; justify-content:center;">
                <?php
                // Aqui estou incluindo o arquivo de configuração
                require_once "config.php";
                // Montando o comando select para exibir a lista de usuários
                $sql = "SELECT * FROM usuarios";
                if ($result = mysqli_query($connection, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table border="1" class="table"> ';
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Nome</th>";
                        echo "<th>Login</th>";
                        echo "<th>Senha</th>";
                        echo "<th>Ações</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['USU_CODIGO'] . "</td>";
                            echo "<td>" . $row['USU_NOME'] . "</td>";
                            echo "<td>" . $row['USU_LOGIN'] . "</td>";
                            echo "<td>" . $row['USU_SENHA'] . "</td>";
                            echo "<td>";
                            echo '<a href="read.php?id=' . $row['USU_CODIGO'] . '">visualizar</a> | ';
                            echo '<a href="update_form.php?id=' . $row['USU_CODIGO'] . '">atualizar</a> | ';
                            echo '<a href="delete.php?id=' . $row['USU_CODIGO'] . '">excluir</a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        // A lista de resultados aparece em um resultset
                        mysqli_free_result($result);
                    } else {
                        echo '<div>Não há ainda usuários cadastrados no banco de dados.</div>';
                    }
                } else {
                    header("location: error.php");
                    exit();
                }
                // fecha a conexão com o Banco de Dados
                mysqli_close($connection);
                ?>
                <br>

            </div>
            <div class="col-6-md-12 mt-5" style="display:flex; justify-content:center;">
                <a href="create_form.php" class="btn btn-success mx-3">Novo Usuário</a>

                <a href="../index.html" class="btn btn-danger">Voltar</a>
            </div>

        </div>
    </div>
</body>

</html>