form = document.getElementById('formSair');

form.addEventListener("submit", async (e) => {
    // Impede o comportamento padrão de envio do formulário
    e.preventDefault();
    sairUsuario();
});


function sairUsuario(){
        var menu = documet.getElementbyID('sectionAtiva');
        menu.style.display = 'none';
}