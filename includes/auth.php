<?php
session_start();

function login($username, $password) {
    // Aqui você deve implementar a lógica de autenticação, como verificar as credenciais em um banco de dados.
    // Retorne true se a autenticação for bem-sucedida, caso contrário, retorne false.
}

function logout() {
    // Finaliza a sessão do usuário.
    session_destroy();
}

function isLoggedIn() {
    // Verifica se o usuário está autenticado.
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    // Redireciona para a página de login se o usuário não estiver autenticado.
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}
?>