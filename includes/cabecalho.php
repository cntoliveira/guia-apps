<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Apps</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Guia de Apps</h1>
            <nav>
                <a href="index.php">🏠 Home</a>
                <a href="filtrar.php">🔍 Buscar</a>
                <?php if(isset($_SESSION['logado'])): ?>
                    <a href="protegido.php">➕ Novo App</a>
                    <a href="logout.php">🚪 Sair</a>
                <?php else: ?>
                    <a href="login.php">🔑 Login</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="container">