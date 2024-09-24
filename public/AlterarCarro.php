<form action="/mvc20242-Patrick/index.php?rota=carro/salvarAlterar" method="POST">
    <input type="hidden" name="id" value="<?= $param["id"] ?>" />
    <label>Marca:</label></br>
    <input type="text" name="marca" value="<?= $param["marca"] ?>" /></br>
    <label>Modelo:</label></br>
    <input type="text" name="modelo" value="<?= $param["modelo"] ?>" /></br>
    <label>Ano de Fabricação:</label></br>
    <input type="text" name="ano_fabricacao" value="<?= $param["ano_fabricacao"] ?>" /></br>
    <label>Placa:</label></br>
    <input type="text" name="placa" value="<?= $param["placa"] ?>" /></br>
    <label>Cor:</label></br>
    <input type="text" name="cor" value="<?= $param["cor"] ?>" /></br>
    <label>Categoria:</label></br>
    <input type="text" name="categoria" value="<?= $param["categoria"] ?>" /></br>
    <label>Preço Diária:</label></br>
    <input type="text" name="preco_diaria" value="<?= $param["preco_diaria"] ?>" /></br>
    <label>Status:</label></br>
    <input type="text" name="status" value="<?= $param["status"] ?>" /></br>
    <label>Quilometragem:</label></br>
    <input type="text" name="quilometragem" value="<?= $param["quilometragem"] ?>" /></br>
    <label>Data Aquisição:</label></br>
    <input type="date" name="data_aquisicao" value="<?= $param["data_aquisicao"] ?>" /></br>
    <input type="submit" value="Enviar" />
</form>