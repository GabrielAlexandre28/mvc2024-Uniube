<?php
namespace dao\mysql;

use dao\interface\IClienteDAO;
use generic\MysqlFactory;

class ClienteDAO extends MysqlFactory implements IClienteDAO {

    public function listar() {
        $sql = "SELECT id, nome FROM clientes";
        return $this->banco->executar($sql);
    }

    public function alterar($id, $nome) {
        $sql = "UPDATE clientes SET nome=:nome WHERE id=:id";
        $param = [
            "id" => $id,
            "nome" => $nome
        ];
        $this->banco->executar($sql, $param);
    }

    public function dados($id) {
        $sql = "SELECT id, nome FROM clientes WHERE id=:id";
        $param = [
            "id" => $id
        ];
        return $this->banco->executar($sql, $param);
    }

    public function criar($nome) {
        $sql = "INSERT INTO clientes (nome) VALUES (:nome)";
        $param = [
            "nome" => $nome
        ];
        $this->banco->executar($sql, $param);
    }

    public function excluir($id) {
        $sql = "DELETE FROM clientes WHERE id=:id";
        $param = [
            "id" => $id
        ];
        $this->banco->executar($sql, $param);
    }
}
?>