<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./../assets/css/styleregistro.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>Cadastro Modavo</title>
</head>

<body class="body">
    <div class="container" id="container">
        <div class="form-image">
            <img src="./../assets/img/logo-modavo-cpaas.png" alt="Form Image">
        </div>

        <header>Registre-se</header>

        <form id="registrationForm" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Dados para Cadastro</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="fullName">Nome</label>
                            <input type="text" id="fullName" name="nome" value="Brendo Ricardo Souza da Silva" placeholder="Digite seu nome" autofocus>
                        </div>

                        <div class="input-field">
                            <label for="date-of-birth">Data de Nascimento</label>
                            <input type="date" id="date-of-birth" placeholder="Enter birth date">
                        </div>

                        <div class="input-field">
                            <label for="gender">Sexo</label>
                            <select id="gender">
                                <option disabled selected>Selecione o Sexo</option>
                                <option selected>Masculino</option>
                                <option>Feminino</option>
                                <option>Outros</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="motherName">Nome Materno</label>
                            <input type="text" id="motherName" value="Luciana Vieira Souza" placeholder="Digite o nome materno">
                        </div>

                        <div class="input-field">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpfCadastro" value="14670545779" id="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="input-field">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" value="brendo" placeholder="Digite seu e-mail">
                        </div>

                        <div class="input-field">
                            <label for="numberMobile">Telefone Celular</label>
                            <input type="tel" id="numberMobile" value="21 99497-2142" placeholder="(XX) XXXXX-XXXX">
                        </div>

                        <div class="input-field">
                            <label for="phone">Telefone Fixo</label>
                            <input type="tel" id="phone" value="21 3467-5592" placeholder="(XX) XXXX-XXXX">
                        </div>

                        <div class="input-field">
                            <label for="txtCEP">Cep</label>
                            <input type="text" id="txtCEP" value="21725360" placeholder="Digite o seu Cep" onblur="apiBuscaCep()">
                        </div>
                        <div class="input-field">
                            <label for="txtEstado">Estado</label>
                            <input type="text" id="txtEstado" name="txtEstado" placeholder="Estado" disabled>
                        </div>
                        <div class="input-field">
                            <label for="txtCidade">Cidade</label>
                            <input type="text" id="txtCidade" name="cidade" placeholder="Cidade" disabled>
                        </div>
                        <div class="input-field">
                            <label for="txtBairro">Bairro</label>
                            <input type="text" id="txtBairro" name="bairro" placeholder="Bairro" disabled>
                        </div>
                        <div class="input-field">
                            <label for="txtLogradouro">Logradouro</label>
                            <input type="text" id="txtRua" placeholder="Logradouro" disabled>
                        </div>
                        <div class="input-field">
                            <label for="txtNumero">Número</label>
                            <input type="text" id="txtNumero"  value="230" placeholder="Digite o seu Endereço completo">
                        </div>
                        <div class="input-field">
                            <label for="txtComplemento">Complemento</label>
                            <input type="text" id="txtComplemento"  value="complemento" placeholder="Digite o seu Endereço completo">
                        </div>

                        <div class="input-field">
                            <label for="login">Login</label>
                            <input type="text" name="login" value="brendo" id="login" placeholder="Digite seu login">
                        </div>

                        <div class="input-field">
                            <label for="password">Senha</label>
                            <input id="password" name="senha" type="password" value="brendori" placeholder="Digite sua senha">
                        </div>

                        <div class="input-field">
                            <label for="confirmPassword">Confirme sua Senha</label>
                            <input id="confirmPassword" type="password" value="brendori" placeholder="Digite sua senha novamente">
                        </div>
                        <div class="input-field">

                        </div>
                    </div>

                </div>
                
                <br>
                <div class="row">
                    <div class="col-12-md-12" style="display:flex; justify-content:right;">
                        
                        <button type="submit" class="btn btn-primary"style="margin-right:5px;" onclick="validateForm()">
                            <span class="btnText">Cadastrar</span>
                        </button>
                        <button class="btn-limpar"  type="button" onclick="LimparCampos()"><span class="btnText" >Limpar</span></button>
                    </div>
                </div>
                <div class="col-12-md-12">
                    <div id="messageContainer" class="messageContainer" style="display:flex;justify-content:center;"></div>
                </div>
            </div>
        </form>
            
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./../assets/js/apiBuscaCep.js"></script>
    <script src="./../assets/js/validacao-cadastro.js"></script>

</body>

</html>