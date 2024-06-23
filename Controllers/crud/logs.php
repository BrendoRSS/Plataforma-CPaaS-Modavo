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
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/css/styleconsulta.css">
    <!-- Template Main CSS File -->
    <title>Logs ativos</title>
</head>

<body>
    <div class="container">
        <div class="row">
    <div class="form-image" style="margin-top:20px;margin-bottom:20px">
            <img src="../../assets/img/logo-modavo-cpaas.png" alt="Form Image" width="200px">
        </div>
        <div class="row">
            <div class="details personal mb-5" style="display:flex;justify-content:center;">
                <h2 class="title">Logs de Usuário</h2>
            </div>
            <div class="container">
            <div class="col-6-md-12" style="display:flex; justify-content:center; width:auto">
                <div class="table-container">
                <?php
                session_start();
                // Aqui estou incluindo o arquivo de configuração
                require_once "config.php";
                
                $idUsuario = $_GET['idUsuário'];
                // Montando o comando select para exibir a lista de usuários
                $sql = "SELECT * FROM erros2fa WHERE Usuarios_idUsuário = '$idUsuario' ORDER BY Data, Hora desc";
                if ($result = mysqli_query($connection, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table border="1" class="table" style="font-size:12px"> ';
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Nome</th>";
                        echo "<th>Pergunta</th>";
                        echo "<th>Resposta informada</th>";
                        echo "<th>Resposta Correta</th>";
                        echo "<th>Data</th>";
                        echo "<th>Hora</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['Usuarios_idUsuário'] . "</td>";
                            echo "<td>" . $row['Nome'] . "</td>";
                            echo "<td>" . $row['Pergunta'] . "</td>";
                            echo "<td>" . $row['repostaErrada'] . "</td>";
                            echo "<td>" . $row['respostaCerta'] . "</td>";
                            echo "<td>" . $row['Data'] . "</td>";
                            echo "<td>" . $row['Hora'] . "</td>";
                        }
                        echo "</table>";
                        // A lista de resultados aparece em um resultset
                        mysqli_free_result($result);
                    } else {
                        echo '<div>Não há logs desse usuário!.</div>';
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
            </div>
            <div class="col-6-md-12 mt-5" style="display:flex; justify-content:center;">
                <a href="javascript:history.back()" class="btn btn-danger">Voltar</a>
            </div>

        </div>
    </div>
    </div>
    </div>
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