<?php
session_start();
require 'includes/cabecalho.php';
require 'includes/apps.php';

$id = $_GET['id'] ?? 0;
$app = null;

foreach($apps as $a) {
    if($a['id'] == $id) {
        $app = $a;
        break;
    }
}

if(!$app) {
    header('Location: index.php');
    exit;
}
?>

<main class="container">
    <a href="index.php" class="voltar">← Voltar</a>
    
    <div class="app-detalhe">
        <img src="assets/img/<?= $app['imagem'] ?>" class="app-imagem">
        <div class="app-info">
            <h2><?= $app['nome'] ?></h2>
            <p><strong>💡 Tipo:</strong> <?= $app['tipo'] ?></p>
            <p><strong>📝 Descrição:</strong> <?= $app['descricao'] ?></p>
            <p><strong>⭐ Nota:</strong> <?= str_repeat('★', $app['nota']) ?></p>
            <a href="<?= $app['link'] ?>" target="_blank" class="botao">Baixar App</a>
        </div>
    </div>
</main>

<?php require 'includes/rodape.php'; ?>