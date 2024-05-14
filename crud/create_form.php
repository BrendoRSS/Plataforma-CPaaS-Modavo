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
    <title>Inserindo Usuários</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-image">
            <img src="../assets/img/logo-modavo-cpaas.png" alt="Form Image">
        </div>
        <form action="create.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Inserindo Usuários</span>
                    <div class="fields">
                        <div class="input-field">
                            Nome: <input type="text" name="nome">
                        </div>

                        <div class="input-field">
                            Login: <input type="text" name="login">
                        </div>

                        <div class="input-field">
                            Senha: <input type="text" name="senha">
                        </div>
                        <div class="input-field">
                            <input type="submit" class="btn btn-success" value="Inserir" style="color:white;">
                            <a href="consulta.php" class="btn btn-danger">Cancelar</a>
                        </div>
                       

                    </div>
                </div>
            </div>
        </form>

</body>

</html>