const inputImagem = document.getElementById("imagem");
const imagemSelecionada = document.getElementById("imagemSelecionada");

inputImagem.addEventListener("change", function () {
  const arquivo = this.files[0];
  const leitor = new FileReader();

  leitor.addEventListener("load", function () {
    imagemSelecionada.setAttribute("src", this.result);
  });

  if (arquivo) {
    leitor.readAsDataURL(arquivo);
  }
});
