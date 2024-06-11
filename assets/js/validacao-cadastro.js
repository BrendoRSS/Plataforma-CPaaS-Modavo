// Obtém referência para o formulário e o contêiner de mensagens
const form = document.getElementById("registrationForm");
const messageContainer = document.getElementById("messageContainer");

// Adiciona um ouvinte de eventos para o envio do formulário
form.addEventListener("submit", async (e) => {
    // Impede o comportamento padrão de envio do formulário
    e.preventDefault();
    validateForm();
});

// Função para validar o formulário
function validateForm() {
    const fullName = $("#fullName").val();
    const dateOfBirth = $("#date-of-birth").val();
    const gender = $("#gender").val();
    const motherName = $("#motherName").val();
    const cpf = $("#cpf").val();
    const numberMobile = $("#numberMobile").val();
    const phone = $("#phone").val();
    const localization = $("#txtCEP").val();
    const estado = $("txtEstado").val();
    const cidade = $("txtCidade").val();
    const bairro = $("txtBairro").val();
    const rua = $("txtRua").val();
    const numero = $("txtNumero").val();
    const complemento = $("txtComplemento").val();
    const login = $("#login").val();
    const password = $("#password").val();
    const confirmPassword = $("#confirmPassword").val();
    // Obtém os valores dos campos do formulário
    // Verifica se todos os campos obrigatórios estão preenchidos
    const requiredFields = [fullName, dateOfBirth, gender, motherName, cpf, numberMobile, phone, localization, login, password, confirmPassword];

    if (requiredFields.some(field => field === "")) {
        // Mostra uma mensagem de erro se algum campo estiver vazio
        showMessage("Preencha todos os campos obrigatórios!", "error");
        return;
    }

    if (ValidaCpf(cpf)== false){
        showMessage("Digite um CPF Válido!!", "error");
        return;
    }else{
        showMessage("continue", "error");
    }

    // Verifica o comprimento do nome
    if (fullName.length < 15 || fullName.length > 60) {
        // Mostra uma mensagem de erro se o comprimento do nome estiver fora do intervalo
        showMessage("O campo Nome deve ter entre 15 e 60 caracteres.", "error");
        return;
    }

    // Verifica os formatos dos números de telefone celular
    const numberMobileRegex = /^(\d{2})\s(\d{5})[-.\s]?(\d{4})$/;
    if (!numberMobileRegex.test(numberMobile) || !numberMobileRegex.test(numberMobile)) {
        // Mostra uma mensagem de erro se o formato do número de telefone for inválido
        showMessage("Formato de telefone celular inválido. Use 00 00000-0000.", "error");
        return;
    }

    // Outro regex para verificar o formato do número de telefone móvel
    const phoneRegex = /^(\d{2})\s(\d{4})[-.\s]?(\d{4})$/;
    if (!phoneRegex.test(phone) || !phoneRegex.test(phone)) {
        // Mostra uma mensagem de erro se o formato do número de telefone for inválido
        showMessage("Formato de telefone fixo inválido. Use 00 0000-0000.", "error");
        return;
    }

    // Verifica o comprimento do login
    if (login.length !== 6) {
        // Mostra uma mensagem de erro se o comprimento do login não for 6
        showMessage("O campo Login deve ter exatamente 6 caracteres.", "error");
        return;
    }

    // Verifica o comprimento da senha
    if (password.length !== 8) {
        // Mostra uma mensagem de erro se o comprimento da senha não for 8
        showMessage("O campo Senha deve ter exatamente 8 caracteres.", "error");
        return;
    }

    // Verifica se as senhas coincidem
    if (password !== confirmPassword) {
        // Mostra uma mensagem de erro se as senhas não coincidirem
        showMessage("As senhas não coincidem.", "error");
        return;
    }

    // Se todas as validações passarem, armazena as informações de login e redireciona para a tela de login
    localStorage.setItem("userLogin", login);
    localStorage.setItem("userPassword", password);


    // Mostra mensagem de sucesso
    showMessage("Cadastro realizado com sucesso!", "success");

    // Redireciona para a tela de login após um atraso
    let formData = new FormData();
    formData.append('fullName', fullName);
    formData.append('dateOfBirth', dateOfBirth);
    formData.append('gender', gender);
    formData.append('motherName', motherName);
    formData.append('cpf', cpf);
    formData.append('numberMobile', numberMobile);
    formData.append('phone', phone);
    formData.append('localization', localization);
    formData.append('estado', estado);
    formData.append('cidade', cidade);
    formData.append('bairro', bairro);
    formData.append('rua', rua);
    formData.append('numero', numero);
    formData.append('complemento', complemento);
    formData.append('login', login);
    formData.append('password', password);


    // Envia os dados via fetch
    fetch('../Controllers/crud/create.php', {
        method: 'POST',
        body: formData
    })
    
    .then(response => response.text())
    .then(data => {
        alert(data);
    })
    .catch(error => {
        console.error('Erro:', error);
    });

    setTimeout(() => {
        // Cria um objeto FormData
    
        window.location.href = "../Controllers/crud/create.php"
    }, 3000);
}

// Função para exibir mensagens
function showMessage(message, type) {
    // Obtém referência para o contêiner de mensagens
    const messageContainer = document.getElementById("messageContainer");

    // Limpa mensagens anteriores
    messageContainer.innerHTML = "";

    // Cria um elemento de mensagem, define a classe e o texto
    const messageDiv = document.createElement("div");
    messageDiv.className = `message ${type}`;
    messageDiv.animate([
        { transform: 'scale(0)' },
        { transform: 'scale(1)' }
    ], 200);

    messageDiv.innerText = message;

    // Adiciona a mensagem ao contêiner
    messageContainer.appendChild(messageDiv);


    // Remove a mensagem após 4 segundos
    setTimeout(() => {
        messageContainer.innerHTML = "";
    }, 4000);
}

function LimparCampos() {
    registrationForm.reset()
}

function ValidaCpf(cpf) {

    var Soma = 0
    var Resto
  
    var strCPF = String(cpf).replace(/[^\d]/g, '')
    
    if (strCPF.length !== 11)
       return false
    
    if ([
      '00000000000',
      '11111111111',
      '22222222222',
      '33333333333',
      '44444444444',
      '55555555555',
      '66666666666',
      '77777777777',
      '88888888888',
      '99999999999',
      ].indexOf(strCPF) !== -1)
      return false
  
    for (i=1; i<=9; i++)
      Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  
    Resto = (Soma * 10) % 11
  
    if ((Resto == 10) || (Resto == 11)) 
      Resto = 0
  
    if (Resto != parseInt(strCPF.substring(9, 10)) )
      return false
  
    Soma = 0
  
    for (i = 1; i <= 10; i++)
      Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i)
  
    Resto = (Soma * 10) % 11
  
    if ((Resto == 10) || (Resto == 11)) 
      Resto = 0
  
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
      return false
  
    return true
  }



