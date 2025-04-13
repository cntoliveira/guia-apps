<?php
session_start();
require 'includes/cabecalho.php';
require 'includes/apps.php';

$categoria = $_GET['categoria'] ?? '';
$appsFiltrados = $categoria ? 
    array_filter($apps, fn($app) => $app['categoria'] == $categoria) : 
    $apps;
?>

<main class="container">
    <h1>🔍 Filtrar Apps</h1>
    
    <form method="get" class="filtro-form">
        <select name="categoria">
            <option value="">Todas categorias</option>
            <?php 
            $categorias = array_unique(array_column($apps, 'categoria'));
            foreach($categorias as $cat): ?>
                <option value="<?= $cat ?>" <?= $categoria == $cat ? 'selected' : '' ?>>
                    <?= $cat ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="botao">Filtrar</button>
    </form>

    <div class="apps-grid">
        <?php foreach($appsFiltrados as $app): ?>
            <?php require 'includes/app-card.php'; ?>
        <?php endforeach; ?>
    </div>
</main>

<?php require 'includes/rodape.php'; ?>