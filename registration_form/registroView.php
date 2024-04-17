<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style registro.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Conheça a Modavo: Sua solução completa de CPaaS</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-image">
            <img src="logo-modavo-cpaas.png" alt="Form Image">
        </div>

        <header>Registre-se</header>

        <form id="registrationForm" method="post" action="novoUsuarioDados.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Dados para Cadastro</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="fullName">Nome</label>
                            <input type="text" id="fullName" placeholder="Digite seu nome">
                        </div>

                        <div class="input-field">
                            <label for="date-of-birth">Data de Nascimento</label>
                            <input type="date" id="date-of-birth" placeholder="Enter birth date">
                        </div>

                        <div class="input-field">
                            <label for="gender">Sexo</label>
                            <select id="gender">
                                <option disabled selected>Selecione o Sexo</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="motherName">Nome Materno</label>
                            <input type="text" id="motherName" placeholder="Digite o nome materno">
                        </div>

                        <div class="input-field">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpfCadastro" id="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="input-field">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" placeholder="Digite seu e-mail">
                        </div>

                        <div class="input-field">
                            <label for="numberMobile">Telefone Celular</label>
                            <input type="tel" id="numberMobile" placeholder="(XX) XXXXX-XXXX">
                        </div>

                        <div class="input-field">
                            <label for="phone">Telefone Fixo</label>
                            <input type="tel" id="phone" placeholder="(XX) XXXX-XXXX">
                        </div>

                        <div class="input-field">
                            <label for="localization">Endereço Completo</label>
                            <input type="text" id="localization" placeholder="Digite o seu Endereço completo">
                        </div>

                        <div class="input-field">
                            <label for="login">Login</label>
                            <input type="text" name="loginCadastro" id="login" placeholder="Digite seu login">
                        </div>

                        <div class="input-field">
                            <label for="password">Senha</label>
                            <input id="password" name="senhaCadastro" 
                            type="password" placeholder="Digite sua senha">
                        </div>

                        <div class="input-field">
                            <label for="confirmPassword">Confirme sua Senha</label>
                            <input id="confirmPassword" type="password" placeholder="Digite sua senha novamente">
                        </div>

                        <div class="input-field">
                            <button class="nextBtn" type="submit" onclick="validateForm()">
                                <span class="btnText">Cadastrar</span>
                            </button>
                        </div>

                        <div id="messageContainer"></div>
                    </div>
                </div>
            </div>
        </form>
    
    </div>
    <script src="validacao.js"></script>
</body>

</html>