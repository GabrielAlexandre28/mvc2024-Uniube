<h2>Aluguéis</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Cliente ID</th>
        <th>Veículo ID</th>
        <th>Ações</th>
    </tr>
    <?php if (isset($param) && is_array($param)) { ?>
        <?php foreach ($param as $valor) { ?>
            <tr>
                <td><?= $valor["id"] ?></td>
                <td><?= $valor["cliente_id"] ?></td>
                <td><?= $valor["veiculo_id"] ?></td>
                <td>
                    <a href="/mvc20242-Patrick/index.php?rota=aluguel/alterar&id=<?= $valor["id"] ?>">Alterar</a> | 
                    <a href="/mvc20242-Patrick/index.php?rota=aluguel/excluir&id=<?= $valor["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir este aluguel?')">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="4">Nenhum aluguel encontrado.</td>
        </tr>
    <?php } ?>
</table>