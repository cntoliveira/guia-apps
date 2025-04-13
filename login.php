<?php
session_start();

if(isset($_SESSION['logado'])) {
    header('Location: protegido.php');
    exit;
}

require 'includes/cabecalho.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_correto = 'admin';
    $senha_correta = '12345'; // Senha fácil pra teste

    if($_POST['usuario'] == $usuario_correto && $_POST['senha'] == $senha_correta) {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit;
    } else {
        $erro = "❌ Usuário ou senha incorretos!";
    }
}
?>

<main class="container login">
    <h1>🔒 Área Admin</h1>
    
    <?php if(isset($erro)): ?>
        <div class="alert-erro"><?= $erro ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" class="botao">Entrar</button>
    </form>
</main>

<?php require 'includes/rodape.php'; ?>