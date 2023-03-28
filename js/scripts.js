var imagem = document.getElementById("imagem");
var preview = document.getElementById("preview");

imagem.addEventListener("change", function () {
  preview.innerHTML = "";
  var files = this.files;

  for (var i = 0; i < files.length; i++) {
    var file = files[i];

    if (file.type.match("image.*")) {
      var reader = new FileReader();

      reader.addEventListener("load", function (event) {
        var img = document.createElement("img");
        img.src = event.target.result;
        preview.appendChild(img).style.scale = "0.5";
      });

      reader.readAsDataURL(file);
    }
  }
});
