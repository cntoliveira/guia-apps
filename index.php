<?php
session_start();
require 'includes/cabecalho.php';
require 'includes/apps.php';
?>

<main class="container">
    <h1>📱 Guia de Apps Úteis</h1>
    
    <?php if(isset($_SESSION['sucesso'])): ?>
        <div class="alert-sucesso">
            <?= $_SESSION['sucesso'] ?>
            <?php unset($_SESSION['sucesso']); ?>
        </div>
    <?php endif; ?>

    <div class="apps-grid">
        <?php foreach($apps as $app): ?>
            <div class="app-card">
                <img src="assets/img/<?= $app['imagem'] ?>" alt="<?= $app['nome'] ?>">
                <h3><?= $app['nome'] ?></h3>
                <p class="categoria"><?= $app['categoria'] ?></p>
                <a href="detalhes.php?id=<?= $app['id'] ?>" class="botao">Ver detalhes</a>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require 'includes/rodape.php'; ?>