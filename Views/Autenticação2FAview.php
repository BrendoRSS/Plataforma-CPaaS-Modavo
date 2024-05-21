<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style login.css">
         
    <title>Login & Registration Form</title> 

</head>
<body>
    
    <div class="container">
        <div class="form-image">
            <img src="logo-modavo-cpaas.png" id="image" alt="Form Image">
        </div>

        <div class="forms">
            <div class="form login">
                <span class="title">Autenticação</span>

                

                <div class="login-signup">
                    <?php
                    $random = rand(1,3);
                    
                    if ($random == 1){
                        echo "Qual o nome da sua mae? </br>" ;
                        echo "<form action='Autenticação2FAview.php' method='post'>
                        <input type='radio' name='nmae' id=''> Maria </br>
                         <input type='radio' name='nmae' id=''> Joana </br>
                         <input type='radio' name='nmae' id=''> Karen </br> 
                         <input type='submit' value='Enviar'>
                         </form>";
                         if (isset($_POST["nmae"]) ? ($_POST["nmae"]):"" == "Maria"){
                            header("location: ../index.html");
                         }
                         elseif(isset($_POST["nmae"]) ? ($_POST["nmae"]):"" == "Joana" or "Maria"){
                            echo "nome incorreto!";
                         }
                        

                    }
                    elseif ($random == 2){
                        echo "Qual a sua data de nascimento?";
                
                    }
                    else{
                        echo "Qual o seu Cep?";
                    }
                    ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="message-container" class="message-container"></div>
    <script src="validacao-login.js"></script>
</body>
</html>