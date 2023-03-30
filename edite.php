<?php
require_once "carros.php";
require_once "header.php";
try {
    $id_carro = $_GET['id'];
    $carro = new Carros($id_carro);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<body>
    <form action="edite_controller.php" method="post" enctype="multipart/form-data">
        <div class="titulo">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Carro</h1>
        </div>
        <div class="modal-body container">
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" required value="<?= $carro->marca; ?>">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo" id="modelo" required value="<?= $carro->modelo; ?>">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="number" class="form-control" name="ano" id="ano" required maxlength="4" value="<?= $carro->ano; ?>">
            </div>
            <div class="img">
                <div class="img1">
                    <h5 for="imagem" class="form-label">Imagem em Exibição</h5>
                    <img src="data:image/wedp;charset=utf8;base64, <?= base64_encode($carro->imagem); ?>" width="200px">
                </div>
                <div class="mb-3">
                    <label for="imagem" class="form-label">Selecione uma imagem:</label>
                    <input class="form-control" type="file" name="imagem" id="imagem" accept="image/*">
                </div>
                <div class="img2">
                    <h5 for="imagem" class="form-label">Imagem Selecionada</h5>
                    <img id="imagemSelecionada" src="#" alt="Imagem selecionada" width="200px">
                </div>
            </div>
            <div class="mb-3">
                <label for="info" class="form-label">Escreva uma descrição do carro incherido</label>
                <textarea class="form-control" id="info" name="info" rows="6"><?= $carro->info; ?></textarea>
            </div>
        </div>
        <div class="meio">
            <div class="button">
                <button type="button" class="btn btn-danger"><a href="index.php" target="_self" style="text-decoration: none; color:white;">Fechar</a></button>
            </div>
            <div class="input">
                <input type="submit" class="btn btn-primary" value="Atualizar">
            </div>
        </div>
    </form>
</body>