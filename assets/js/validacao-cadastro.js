// Obtém referência para o formulário e o contêiner de mensagens
const form = document.getElementById("registrationForm");
const messageContainer = document.getElementById("messageContainer");

// Adiciona um ouvinte de eventos para o envio do formulário
form.addEventListener("submit", async (e) => {
    // Impede o comportamento padrão de envio do formulário
    e.preventDefault();
    validateForm()
});

// Função para validar o formulário
function validateForm() {
    const fullName = document.getElementById("fullName").value;
    const dateOfBirth = document.getElementById("date-of-birth").value;
    const gender = document.getElementById("gender").value;
    const motherName = document.getElementById("motherName").value;
    const cpf = document.getElementById("cpf").value;
    const numberMobile = document.getElementById("numberMobile").value;
    const phone = document.getElementById("phone").value;
    const localization = document.getElementById("txtCEP").value;
    const login = document.getElementById("login").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    // Obtém os valores dos campos do formulário
    // Verifica se todos os campos obrigatórios estão preenchidos
    const requiredFields = [fullName, dateOfBirth, gender, motherName, cpf, numberMobile, phone, localization, login, password, confirmPassword];

    if (requiredFields.some(field => field.trim() === "")) {
        // Mostra uma mensagem de erro se algum campo estiver vazio
        showMessage("Preencha todos os campos obrigatórios!", "error");
        return;
    }

    if (ValidaCpf(cpf)== false){
        showMessage("Digite um CPF Válido!!", "error");
        return;
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
    setTimeout(() => {
        window.location.href = "loginView.php";
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

    cpf = cpf.replace(/\.|-/g, "");

    soma = 0;
    soma += cpf[0] * 10;
    soma += cpf[1] * 9;
    soma += cpf[2] * 8;
    soma += cpf[3] * 7;
    soma += cpf[4] * 6;
    soma += cpf[5] * 5;
    soma += cpf[6] * 4;
    soma += cpf[7] * 3;
    soma += cpf[8] * 2;
    soma = (soma * 10) % 11;
    if (soma == 10 || soma == 11)
        soma = 0;
    if (soma != cpf[9])
        return false;

    soma = 0;
    soma += cpf[0] * 11;
    soma += cpf[1] * 10;
    soma += cpf[2] * 9;
    soma += cpf[3] * 8;
    soma += cpf[4] * 7;
    soma += cpf[5] * 6;
    soma += cpf[6] * 5;
    soma += cpf[7] * 4;
    soma += cpf[8] * 3;
    soma += cpf[9] * 2;
    soma = (soma * 10) % 11;
    if (soma == 10 || soma == 11) {
        soma = 0;
    }

    if (soma != cpf[10]) {
        return false
    }

}
