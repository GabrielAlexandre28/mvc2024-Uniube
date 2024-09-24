<?php
namespace dao\mysql;

use dao\interface\ICarroDAO;
use generic\MysqlFactory;

class CarroDAO extends MysqlFactory implements ICarroDAO {

    public function listar() {
        $sql = "SELECT id, marca, modelo, ano_fabricacao, placa, cor, categoria, preco_diaria, status, quilometragem, data_aquisicao FROM veiculos";
        return $this->banco->executar($sql);
    }

    public function alterar($id, $dados) {
        $sql = "UPDATE veiculos SET marca=:marca, modelo=:modelo, ano_fabricacao=:ano_fabricacao, placa=:placa, cor=:cor, categoria=:categoria, preco_diaria=:preco_diaria, status=:status, quilometragem=:quilometragem, data_aquisicao=:data_aquisicao WHERE id=:id";
        $param = [
            "id" => $id,
            "marca" => $dados["marca"],
            "modelo" => $dados["modelo"],
            "ano_fabricacao" => $dados["ano_fabricacao"],
            "placa" => $dados["placa"],
            "cor" => $dados["cor"],
            "categoria" => $dados["categoria"],
            "preco_diaria" => $dados["preco_diaria"],
            "status" => $dados["status"],
            "quilometragem" => $dados["quilometragem"],
            "data_aquisicao" => $dados["data_aquisicao"]
        ];
        $this->banco->executar($sql, $param);
    }

    public function dados($id) {
        $sql = "SELECT id, marca, modelo, ano_fabricacao, placa, cor, categoria, preco_diaria, status, quilometragem, data_aquisicao FROM veiculos WHERE id=:id";
        $param = [
            "id" => $id
        ];
        return $this->banco->executar($sql, $param);
    }

    public function criar($dados) {
        if (!isset($dados["marca"], $dados["modelo"], $dados["ano_fabricacao"], $dados["placa"], $dados["cor"], $dados["categoria"], $dados["preco_diaria"], $dados["status"], $dados["quilometragem"], $dados["data_aquisicao"])) {
            throw new \InvalidArgumentException("Dados incompletos para criar um veículo");
        }

        $sql = "INSERT INTO veiculos (marca, modelo, ano_fabricacao, placa, cor, categoria, preco_diaria, status, quilometragem, data_aquisicao) VALUES (:marca, :modelo, :ano_fabricacao, :placa, :cor, :categoria, :preco_diaria, :status, :quilometragem, :data_aquisicao)";
        $param = [
            "marca" => $dados["marca"],
            "modelo" => $dados["modelo"],
            "ano_fabricacao" => $dados["ano_fabricacao"],
            "placa" => $dados["placa"],
            "cor" => $dados["cor"],
            "categoria" => $dados["categoria"],
            "preco_diaria" => $dados["preco_diaria"],
            "status" => $dados["status"],
            "quilometragem" => $dados["quilometragem"],
            "data_aquisicao" => $dados["data_aquisicao"]
        ];
        $this->banco->executar($sql, $param);
    }

    public function excluir($id) {
        $sql = "DELETE FROM veiculos WHERE id=:id";
        $param = [
            "id" => $id
        ];
        $this->banco->executar($sql, $param);
    }
}
?>