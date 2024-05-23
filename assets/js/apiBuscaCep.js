// ========= BUSCADOR DE CEP ======= //
import "validacao-cadastro.js";


let cep = document.getElementById('txtCEP');
function apiBuscaCep() {
    let cep = document.getElementById('txtCEP');
    if (cep !== "") {
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep.value;

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        //tratar a resposta da requisição
        req.onload = function () {
            if (req.status === 200) {
                let endereco = JSON.parse(req.response);

                document.getElementById("txtBairro").value = endereco.neighborhood;
                document.getElementById("txtCidade").value = endereco.city;
                document.getElementById("txtEstado").value = endereco.state;
                document.getElementById("txtRua").value = endereco.street;
            }
        }
    }
}