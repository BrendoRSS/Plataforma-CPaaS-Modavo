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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         
    <title>Login</title> 

</head>
<body>
    
    <div class="container">
        <div class="form-image">
            <img src="./../assets/img/logo-modavo-cpaas.png" id="image" alt="Form Image">
        </div>

        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form id="formLogin" method="post" action="../Controllers/crud/testeLogin.php">
                    <div class="input-field">
                        <input type="text" id="login" name="loginLogin" placeholder="Digite o seu login" >
                        <img src="./../assets/img/Login/user-3-line.png" alt="">
                    </div>
                    <div class="input-field">
                        <input type="password" id="senha" name="senhaLogin" class="password" placeholder="Digite sua senha">
                        <img src="./../assets/img/Login/lock-password-line.png" alt="">
                    </div>

                    <div class="input-field button">
                        <button type="submit" value="Enviar" id="loginBtn" name="submit" title="Login">
                            <span class="btnLogin">Login</span>
                        </button>
                    </div>
                    <div class="input-field button">
                        <button  type="button" id="LimparCamposLogin" 
                        style="background:#aaa">
                        <span class="btnText">Limpar</span>
                        </button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Não tem cadastro?
                        <a href="registroView.php" class="text signup-link">Cadastre-se agora</a>
                    </span>
                </div>
                
            </div>
        </div>
    </div>
    <div id="message-container" class="message-container"></div>

    <script src="../assets/js/validacao-login.js"></script>
    
    
</body>
</html>