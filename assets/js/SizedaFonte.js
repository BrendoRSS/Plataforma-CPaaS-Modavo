const tamanhoDaFonte = document.querySelectorAll('.tamanhoDaFonte');

for (let button of tamanhoDaFonte) {
  button.addEventListener('click', function (event) {
    document.body.style.setProperty('--font-size', this.dataset.fontSize);
  });
}