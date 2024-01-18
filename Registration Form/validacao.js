// Aguarda o carregamento completo do documento HTML
document.addEventListener("DOMContentLoaded", function () {
    // Obtém referência para o formulário e o contêiner de mensagens
    const form = document.getElementById("registrationForm");
    const messageContainer = document.getElementById("messageContainer");

    // Adiciona um ouvinte de eventos para o envio do formulário
    form.addEventListener("submit", function (event) {
        // Impede o comportamento padrão de envio do formulário
        event.preventDefault();
        // Chama a função para validar o formulário
        validateForm();
    });

    // Função para validar o formulário
    function validateForm() {
        // Obtém os valores dos campos do formulário
        const fullName = document.getElementById("fullName").value;
        const dateOfBirth = document.getElementById("date-of-birth").value;
        const gender = document.getElementById("gender").value;
        const motherName = document.getElementById("motherName").value;
        const cpf = document.getElementById("cpf").value;
        const numberMobile = document.getElementById("numberMobile").value;
        const phone = document.getElementById("phone").value;
        const localization = document.getElementById("localization").value;
        const login = document.getElementById("login").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        // Verifica se todos os campos obrigatórios estão preenchidos
        const requiredFields = [fullName, dateOfBirth, gender, motherName, cpf, numberMobile, phone, localization, login, password, confirmPassword];
        if (requiredFields.some(field => field.trim() === "")) {
            // Mostra uma mensagem de erro se algum campo estiver vazio
            showMessage("Preencha todos os campos obrigatórios.", "error");
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
            showMessage("Formato de telefone inválido. Use 21 97008-0526.", "error");
            return;
        }

        // Outro regex para verificar o formato do número de telefone móvel
        const phoneRegex = /^(\d{2})\s(\d{4})[-.\s]?(\d{4})$/;
        if (!phoneRegex.test(phone) || !phoneRegex.test(phone)) {
            // Mostra uma mensagem de erro se o formato do número de telefone for inválido
            showMessage("Formato de telefone inválido. Use 21 2405-2680.", "error");
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
            window.location.href = "login.html";
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
        messageDiv.innerText = message;

        // Adiciona a mensagem ao contêiner
        messageContainer.appendChild(messageDiv);

        // Remove a mensagem após 3 segundos
        setTimeout(() => {
            messageContainer.innerHTML = "";
        }, 3000);
    }
});
