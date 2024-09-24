<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Aluguel de Carros</title>
</head>
<body>
    <h1>Sistema de Aluguel de Carros</h1>
    <h2>Clientes</h2>
    <ul>
        <li><a href="/mvc20242-Patrick/index.php?rota=cliente/lista">Listar Clientes</a></li>
        <li><a href="/mvc20242-Patrick/index.php?rota=cliente/criar">Criar Cliente</a></li>
    </ul>
    <h2>Carros</h2>
    <ul>
        <li><a href="/mvc20242-Patrick/index.php?rota=carro/lista">Listar Carros</a></li>
        <li><a href="/mvc20242-Patrick/index.php?rota=carro/criar">Criar Carro</a></li>
    </ul>
    <h2>Aluguéis</h2>
    <ul>
        <li><a href="/mvc20242-Patrick/index.php?rota=aluguel/lista">Listar Aluguéis</a></li>
        <li><a href="/mvc20242-Patrick/index.php?rota=aluguel/criar">Criar Aluguel</a></li>
    </ul>
</body>
</html>
<?php
require_once 'generic/AutoLoad.php';

use generic\Controller;

function exibirMensagemErro() {
    echo "<div>Ocorreu um erro inesperado. Por favor, tente novamente mais tarde.</div>";
}

try {
    $controller = new Controller();

    if (isset($_GET['rota'])) {
        $rota = $_GET['rota'];
        $controller->verificarCaminho($rota);
    } else {
        echo "Rota não especificada!";
    }
} catch (Exception $e) {
    exibirMensagemErro();
    // Log do erro para análise posterior
    error_log($e->getMessage());
}
?>