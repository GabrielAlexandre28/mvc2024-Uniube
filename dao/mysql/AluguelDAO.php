<?php
namespace dao\mysql;

use dao\interface\IAluguelDAO;
use generic\MysqlFactory;

class AluguelDAO extends MysqlFactory implements IAluguelDAO {
    public function __construct() {
        parent::__construct();
    }

    public function listar() {
        $sql = "SELECT * FROM alugueis";
        return $this->banco->executar($sql);
    }

    public function alterar($id, $dados) {
        $sql = "UPDATE alugueis SET cliente_id=:cliente_id, veiculo_id=:veiculo_id, data_inicio=:data_inicio, data_fim=:data_fim, preco_total=:preco_total, status=:status WHERE id=:id";
        $param = [
            "id" => $id,
            "cliente_id" => $dados["cliente_id"],
            "veiculo_id" => $dados["veiculo_id"],
            "data_inicio" => $dados["data_inicio"],
            "data_fim" => $dados["data_fim"],
            "preco_total" => $dados["preco_total"],
            "status" => $dados["status"]
        ];
        $this->banco->executar($sql, $param);
    }

    public function dados($id) {
        $sql = "SELECT * FROM alugueis WHERE id=:id";
        $param = ["id" => $id];
        return $this->banco->executar($sql, $param);
    }

    public function criar($dados) {
        $sql = "INSERT INTO alugueis (cliente_id, veiculo_id, data_inicio, data_fim, preco_total, status) VALUES (:cliente_id, :veiculo_id, :data_inicio, :data_fim, :preco_total, :status)";
        $param = [
            "cliente_id" => $dados["cliente_id"],
            "veiculo_id" => $dados["veiculo_id"],
            "data_inicio" => $dados["data_inicio"],
            "data_fim" => $dados["data_fim"],
            "preco_total" => $dados["preco_total"],
            "status" => $dados["status"]
        ];
        $this->banco->executar($sql, $param);
    }

    public function excluir($id) {
        $sql = "DELETE FROM alugueis WHERE id=:id";
        $param = ["id" => $id];
        $this->banco->executar($sql, $param);
    }
}
?>s