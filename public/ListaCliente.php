<h2>Clientes</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php if (isset($param) && is_array($param)) { ?>
        <?php foreach ($param as $valor) { ?>
            <tr>
                <td><?= $valor["id"] ?></td>
                <td><?= $valor["nome"] ?></td>
                <td>
                    <a href="/mvc20242-Patrick/index.php?rota=cliente/alterar&id=<?= $valor["id"] ?>">Alterar</a> | 
                    <a href="/mvc20242-Patrick/index.php?rota=cliente/excluir&id=<?= $valor["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="3">Nenhum cliente encontrado.</td>
        </tr>
    <?php } ?>
</table>