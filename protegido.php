<?php
session_start();

if(!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

require 'includes/cabecalho.php';
require 'includes/apps.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $novoApp = [
        'id' => count($apps) + 1,
        'nome' => htmlspecialchars($_POST['nome']),
        'categoria' => $_POST['categoria'],
        'tipo' => $_POST['tipo'],
        'descricao' => htmlspecialchars($_POST['descricao']),
        'imagem' => 'padrao.png', // Você pode substituir depois
        'nota' => min(5, max(1, (int)$_POST['nota'])), // Garante nota entre 1-5
        'link' => filter_var($_POST['link'], FILTER_VALIDATE_URL)
    ];

    $_SESSION['apps_adicionados'][] = $novoApp;
    $_SESSION['sucesso'] = "App '{$novoApp['nome']}' adicionado com sucesso!";
    header('Location: index.php');
    exit;
}
?>

<main class="container">
    <h1>➕ Adicionar Novo App</h1>
    
    <form method="post">
        <label>Nome do App:</label>
        <input type="text" name="nome" required>
        
        <label>Categoria:</label>
        <input type="text" name="categoria" required>
        
        <label>Tipo:</label>
        <input type="text" name="tipo" required>
        
        <label>Descrição:</label>
        <textarea name="descricao" rows="3" required></textarea>
        
        <label>Nota (1-5):</label>
        <input type="number" name="nota" min="1" max="5" required>
        
        <label>Link para download:</label>
        <input type="url" name="link" required>
        
        <button type="submit" class="botao">Salvar</button>
    </form>
</main>

<?php require 'includes/rodape.php'; ?>