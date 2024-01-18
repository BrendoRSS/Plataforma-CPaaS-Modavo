// Recupera as informações do localStorage
const storedLogin = localStorage.getItem("userLogin");
const storedPassword = localStorage.getItem("userPassword");

// Realizar o login
function login(username, password) {
    if (username === storedLogin && password === storedPassword) {
        localStorage.setItem("loggedInUser", username);

        showMessage("Login realizado com sucesso!", "success");
        setTimeout(() => redirectToMainPage(), 3000); // Remova o argumento 'username' aqui
    } else {
        showMessage("Usuário ou senha inválidos.", "error");
    }
}

// Redirecionar para a página principal
function redirectToMainPage() {

    const loggedInUser = localStorage.getItem("loggedInUser");

        // Nome do usuário à URL como parâmetro de consulta
    const url = `../index.html?user=${encodeURIComponent(loggedInUser)}`;
    window.location.href = url;

}

// Evento Ouvinte Botão de Login
document.getElementById('loginBtn').addEventListener('click', function (event) {
    event.preventDefault();

    const inputUsername = document.querySelector('.form.login input[type="text"]').value;
    const inputPassword = document.querySelector('.form.login input[type="password"]').value;

    // Chama a função de login
    login(inputUsername, inputPassword);
});

// Mostrar mensagens
function showMessage(message, type) {
    const messageContainer = document.getElementById("message-container");
    
    // Remova qualquer mensagem anterior
    messageContainer.innerHTML = "";

    // Crie um elemento de mensagem
    const messageElement = document.createElement("div");
    messageElement.className = `${type}-message`;
    messageElement.textContent = message;

    // Adicione o elemento à área de mensagens
    messageContainer.appendChild(messageElement);

    setTimeout (() => {
        messageContainer.innerHTML = "";
    }, 3000);
}
