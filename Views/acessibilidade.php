<style>
    body {
        --font-size:1rem;
    }
    .row p {
        font-size: calc(0.85*var(--font-size));
    }
    .row button {
        font-size: calc(0.85*var(--font-size));
    }
</style>
<script>
    const tamanhoDaFonte = document.querySelectorAll('.tamanhoDaFonte');

    for (let button of tamanhoDaFonte) {
        button.addEventListener('click', function(event) {
            document.body.style.setProperty('--font-size', this.dataset.fontSize);
        });
    }
</script>
<link rel="stylesheet" href="./../assets/css/botao-acessibilidade.css">

<div class="row">
    <div class="col-12-md-6 mb-3" style="display: flex; justify-content:center">
        <p>Tamanho da Fonte</p>
    </div>
    <div class="col-12-md-6 mb-1" style="display: flex; justify-content:center">
        <button data-font-size="0.7rem" class="btn btn-primary tamanhoDaFonte">Pequena</button>

    </div>
    <div class="col-12-md-6 mb-1" style="display: flex; justify-content:center">
        <button data-font-size="1.0rem" class="btn btn-primary tamanhoDaFonte">Normal</button>
    </div>
    <div class="col-12-md-6" style="display: flex; justify-content:center">
        <button data-font-size="1.3rem" class="btn btn-primary tamanhoDaFonte">Grande</button>
    </div>
</div>
<li>
    <hr class="dropdown-divider">
</li>
<div class="row">
    <div class="col-12-md-6" style="display: flex; justify-content:center">
        <p>Modo Escuro</p>
    </div>

    <div class="col-12-md-6" style="display: flex; justify-content:center">
        <div class="onoff">

            <input type="checkbox" class="toggle" id="onoff1" onclick="mododark(this)">
            <label for="onoff1"></label>
        </div>

    </div>

</div>