<form action="/mvc20242-Patrick/index.php?rota=aluguel/salvarAlterar" method="POST">
    <input type="hidden" name="id" value="<?= $param["id"] ?>" />
    <label>Cliente ID:</label></br>
    <input type="text" name="cliente_id" value="<?= $param["cliente_id"] ?>" /></br>
    <label>Veículo ID:</label></br>
    <input type="text" name="veiculo_id" value="<?= $param["veiculo_id"] ?>" /></br>
    <label>Data Início:</label></br>
    <input type="text" name="data_inicio" value="<?= $param["data_inicio"] ?>" /></br>
    <label>Data Fim:</label></br>
    <input type="text" name="data_fim" value="<?= $param["data_fim"] ?>" /></br>
    <label>Preço Total:</label></br>
    <input type="text" name="preco_total" value="<?= $param["preco_total"] ?>" /></br>
    <label>Status:</label></br>
    <input type="text" name="status" value="<?= $param["status"] ?>" /></br>
    <input type="submit" value="Enviar" />
</form>