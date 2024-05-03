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
                <span class="title">Login</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Digite o seu login" >
                        <img src="../assets/img/Login/user-3-line.png" alt="">
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Digite sua senha">
                        <img src="../assets/img/Login/lock-password-line.png" alt="">
                    </div>

                    <div class="input-field button">
                        <button type="submit" id="loginBtn" title="Login" onclick="loginAtivo ()">
                            <span class="btnLogin">Login</span>
                        </button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Não tem cadastro?
                        <a href="registro.php" class="text signup-link">Cadastre-se agora</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="message-container" class="message-container"></div>
    <script src="validacao-login.js"></script>
</body>
</html>