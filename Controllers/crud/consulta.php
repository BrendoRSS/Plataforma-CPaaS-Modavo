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
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/styleconsulta.css">
    <!-- Template Main CSS File -->
    <title>Consulta</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="form-image" style="margin-top:20px;margin-bottom:20px">
                <img src="../../assets/img/logo-modavo-cpaas.png" alt="Form Image" width="200px">
            </div>
            <div class="row">
                <div class="details personal mb-5" style="display:flex;justify-content:center;">
                    <h2 class="title">Usuários</h2>
                </div>
                <div class="container">
                    <div class="col-6-md-12" style="width:auto">
                        <div class="table-container">
                            <div class="row">
                                <div class="col-6-md-6" >
                                    <form method="get" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
                                        <label for="filtro">Nome:</label>
                                        <input type="text" class="form-control" style="width: 40%;" name="nome" id="filtro" placeholder="Filtrar por nome">
                                        <label for="filtro">Cep:</label>
                                        <input type="text" class="form-control" style="width: 40%;" name="cep" id="filtro" placeholder="Filtrar por cep">
                                        <input type="submit" class="btn btn-dark mt-3" value="Filtrar">
                                    </form>
                                    <br>
                                </div>
                                <div class="col-6-md-6">
                                    <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <input class="btn btn-light" type="submit" name="remover" class="" value="Remover filtros" id="filtro">
                                    </form>
                                </div>

                            </div>
                            <?php
                            session_start();
                            $remover = isset($_POST['remover']);
                            $filtro = "";
                            // Aqui estou incluindo o arquivo de configuração
                            require_once "config.php";
                            if (isset($_POST['remover'])) {
                                $filtro = "idUsuário > 1";
                                unset($remover);
                            } else {
                                if(isset($_GET['nome']) and isset($_GET['cep'])){
                                $nome = $_GET['nome']??'';
                                $cep = $_GET['cep']??'';

                                if (!empty($nome) and !empty($cep)) {
                                    $filtro = " Nome LIKE '%$nome%' and Cep = '$cep' ";
                                } elseif (!empty($nome) and empty($cep)) {
                                    $filtro = " Nome LIKE '%$nome%' ";
                                } elseif (!empty($cep) and empty($nome)) {
                                    $filtro = " Cep = '$cep' ";
                                } elseif (empty($nome) and empty($cep)) {
                                    $filtro = "idUsuário > 1";
                                };

                                }else{
                                    header("location: consulta.php");
                                }
                            };
                            echo '<br>';
                            // Montando o comando select para exibir a lista de usuários
                            $sql = "SELECT * FROM usuários where $filtro order by Nome";
                            if ($result = mysqli_query($connection, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    echo '<table border="1" class="table" style="font-size:12px"> ';
                                    echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Status</th>";
                                    echo "<th>Ações</th>";
                                    echo "<th style='padding-right:180px'>Nome</th>";
                                    echo "<th>Data Nascimento</th>";
                                    echo "<th>CPF</th>";
                                    echo "<th>Gênero</th>";
                                    echo "<th style='padding-right:180px'>Nome Mãe</th>";
                                    echo "<th style='padding-right:50px'>Telefone Celular</th>";
                                    echo "<th style='padding-right:50px'>Telefone Fixo</th>";
                                    echo "<th>Cep</th>";
                                    echo "<th style='padding-right:180px'>Logradouro</th>";
                                    echo "<th style='padding-right:90px'>Bairro</th>";
                                    echo "<th style='padding-right:90px'>Cidade</th>";
                                    echo "<th>Estado</th>";
                                    echo "<th>Nº</th>";
                                    echo "<th>Complemento</th>";
                                    echo "<th>Login</th>";
                                    echo "<th>Senha</th>";
                                    echo "</tr>";
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['idUsuário'] . "</td>";
                                        echo "<td>" . $row['statusDeUsuario'] . "</td>";
                                        echo "<td>";
                                        echo '<a title="Ver Usuário" style="height:30px; width:40px; font-size:12px" class="btn btn-success" href="read.php?idUsuário=' . $row['idUsuário'] . '"><i class="bi bi-eye-fill"></i></a>';
                                        if ($row['idUsuário'] != "27") {
                                            if ($row['$statusDeUsuario'] = "Ativo") {
                                                echo '<a title="Alterar Status de Usuário"style="margin-top:5px; height:30px; font-size:12px;width:40px" class="btn btn-info" href="delete.php?idUsuário=' . $row['idUsuário'] . '"><i class="bi bi-person-fill-check"></i></a>';
                                            }
                                        };
                                        echo '<a title="Ver Logs" style=" margin-top:5px;height:30px; width:40px; font-size:12px" class="btn btn-secondary" href="logs.php?idUsuário=' . $row['idUsuário'] . '"><i class="bi bi-activity"></i></i></a>';
                                        echo "</td>";
                                        echo "<td>" . $row['Nome'] . "</td>";
                                        echo "<td>" . $row['dataNascimento'] . "</td>";
                                        echo "<td>" . $row['CPF'] . "</td>";
                                        echo "<td>" . $row['sexo'] . "</td>";
                                        echo "<td>" . $row['nomeMae'] . "</td>";
                                        echo "<td>" . $row['telefoneCelular'] . "</td>";
                                        echo "<td>" . $row['TelefoneFixo'] . "</td>";
                                        echo "<td>" . $row['Cep'] . "</td>";
                                        echo "<td>" . $row['Logradouro'] . "</td>";
                                        echo "<td>" . $row['Bairro'] . "</td>";
                                        echo "<td>" . $row['cidade'] . "</td>";
                                        echo "<td>" . $row['Estado'] . "</td>";
                                        echo "<td>" . $row['NumeroResidencia'] . "</td>";
                                        echo "<td>" . $row['Complemento'] . "</td>";
                                        echo "<td>" . $row['Login'] . "</td>";
                                        echo "<td>" . $row['Senha'] . "</td>";

                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // A lista de resultados aparece em um resultset
                                    mysqli_free_result($result);
                                } else {
                                    echo '<div>Não encontrado!.</div>';
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
                        <a href="../../Views/index.php" class="btn btn-danger">Voltar</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS Files -->
    <script src="./../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="./../assets/vendor/aos/aos.js"></script>
    <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./../assets/vendor/php-email-form/validate.js"></script>

</body>

</html>