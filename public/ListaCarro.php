<h2>Carros</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Ações</th>
    </tr>
    <?php if (isset($param) && is_array($param)) { ?>
        <?php foreach ($param as $valor) { ?>
            <tr>
                <td><?= $valor["id"] ?></td>
                <td><?= $valor["marca"] ?></td>
                <td><?= $valor["modelo"] ?></td>
                <td>
                    <a href="/mvc20242-Patrick/index.php?rota=carro/alterar&id=<?= $valor["id"] ?>">Alterar</a> | 
                    <a href="/mvc20242-Patrick/index.php?rota=carro/excluir&id=<?= $valor["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="4">Nenhum carro encontrado.</td>
        </tr>
    <?php } ?>
</table>