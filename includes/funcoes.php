<?php
// Funções utilitárias para o aplicativo

function exibirMensagem($mensagem) {
    echo "<div class='mensagem'>{$mensagem}</div>";
}

function redirecionar($url) {
    header("Location: {$url}");
    exit();
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function sanitizarEntrada($entrada) {
    return htmlspecialchars(trim($entrada));
}

// Adicione mais funções conforme necessário
?>