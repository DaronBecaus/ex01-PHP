<?php
require_once "header.php" ?>

<div class="row row-cols-1 row-cols-md-2 g-4" style="width: 100%;">
    <?php foreach ($list as $p) : ?>
        <div class="col">
            <div class="card">
                <img src="data:image/wedp;charset=utf8;base64, <?= base64_encode($p['imagem']); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $p['modelo']; ?></h5>
                    <p class="card-text">
                        <?= $p['info']; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
require_once "footer.php" ?>