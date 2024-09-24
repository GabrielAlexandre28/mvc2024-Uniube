<?php
namespace view;

class ClienteView {
    public function listaClientes($clientes) {
        echo '<h2>Lista de Clientes</h2>';
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Nome</th><th>Ações</th></tr>';
        foreach ($clientes as $cliente) {
            echo '<tr>';
            echo '<td>' . $cliente['id'] . '</td>';
            echo '<td>' . $cliente['nome'] . '</td>';
            echo '<td>';
            echo '<a href="/mvc20242-Patrick/index.php?rota=cliente/alterar&id=' . $cliente['id'] . '">Alterar</a> | ';
            echo '<a href="/mvc20242-Patrick/index.php?rota=cliente/excluir&id=' . $cliente['id'] . '" onclick="return confirm(\'Tem certeza que deseja excluir este cliente?\')">Excluir</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public function alterarClientes($cliente) {
        echo '<h2>Alterar Cliente</h2>';
        echo '<form action="/mvc20242-Patrick/index.php?rota=cliente/salvarAlterar" method="POST">';
        echo '<input type="hidden" name="id" value="' . $cliente['id'] . '" />';
        echo '<label>Nome:</label></br>';
        echo '<input type="text" name="nome" value="' . $cliente['nome'] . '" /></br>';
        echo '<input type="submit" value="Enviar" />';
        echo '</form>';
    }

    public function criarCliente() {
        echo '<h2>Criar Cliente</h2>';
        echo '<form action="/mvc20242-Patrick/index.php?rota=cliente/salvarCriar" method="POST">';
        echo '<label>Nome:</label></br>';
        echo '<input type="text" name="nome" required /></br>';
        echo '<input type="submit" value="Enviar" />';
        echo '</form>';
    }
}
?>