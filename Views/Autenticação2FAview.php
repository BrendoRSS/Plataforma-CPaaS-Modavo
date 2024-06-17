<?php 
  session_start();
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./../assets/css/stylelogin.css">
         
    <title>Login & Registration Form</title> 

    <!-- Vendor CSS Files -->
  
  <link href="./../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


</head>
<body class="body">
    <div class="container">
        <div class="form-image">
            <img src="../assets/img/logo-modavo-cpaas.png" id="image" alt="Form Image">
        </div>

        <div class="forms">
            <div class="form login">
                <span class="title">Autenticação</span>

                

                <div class="login-signup">
                    
                        
                    <?php
                    $random = rand(1,3);
                    
                    if ($random == 1){
                        echo "<div style='display:block;'>";
                        echo "Qual o nome da sua mae? </br><div>" ;
                        echo "<div style='display:flex;justify-content:center'>";
                        echo "<form class='form' action='./../Controllers/crud/teste2FA.php' method='post'>
                        <input type='text'  name='nmae' class='form-control form-control-lg' style='width: 100%;'> </br> 
                         <input class='btn btn-primary' type='submit' value='Enviar'>
                         </form> </div>";
                        
                        

                    }
                    elseif ($random == 2){
                        echo "<div style='display:block;'>";
                        echo "Qual a sua data de nascimento?</div>";
                        echo "<div style='display:flex;justify-content:center'>";
                        echo "<form class='form' action='./../Controllers/crud/teste2FA.php' method='post'>
                        <input type='text' name='dtnascimento' class='form-control'> </br> 
                         <input class='btn btn-primary' type='submit' value='Enviar'>
                         </form></div>";
                    }
                    else{
                        echo "<div style='display:block;'>";
                        echo "Qual o seu Cep?</div>";
                        echo "<div style='display:flex;justify-content:center'>";
                        echo "<form class='form' action='./../Controllers/crud/teste2FA.php' method='post'>
                        <input type='text' name='cep' class='form-control'> </br> 
                         <input class='btn btn-primary' type='submit' value='Enviar'>
                         </form></div>";
                    }

                    ?>
                    </span>
                </div>
               
                
            </div>
        </div>
    </div> 
    
    <div id="message-container" class="message-container"></div>
    <script src="validacao-login.js"></script>

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