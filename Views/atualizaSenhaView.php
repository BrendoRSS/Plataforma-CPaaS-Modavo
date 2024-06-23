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
         
    <title>Atualizar senha</title> 

</head>
<body>
    
    <div class="container">
        <div class="form-image">
            <img src="./../assets/img/logo-modavo-cpaas.png" id="image" alt="Form Image">
        </div>

        <div class="forms">
            <div class="form login">
                <span class="title">Atualize sua senha</span>

                <form id="formLogin" method="post" action="../Controllers/crud/atualizaSenha.php">
                    <div class="input-field">
                        <input type="password" id="novaSenha" name="novaSenha" class="password" minlength="8" maxlength="8" placeholder="Nova senha" required>
                        <img src="./../assets/img/Login/lock-password-line.png" alt="">
                        
                    </div>
                    <br>
                    <p style="color:red">Requisitos:</p>
                    <p style="color:red">* 8 caracteres alfabéticos</p>

                    <div class="input-field button">
                        <button type="submit" value="Enviar" id="loginBtn" name="submit" title="Login">
                            <span class="btnLogin">Atualizar</span>
                        </button>
                    </div>
                    <div class="input-field button">
                        <button  type="button" id="LimparCamposLogin" 
                        style="background:#aaa">
                        <span class="btnText">Limpar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="message-container" class="message-container"></div>

    <script src="../assets/js/validacao-login.js"></script>
    
    
</body>
</html>