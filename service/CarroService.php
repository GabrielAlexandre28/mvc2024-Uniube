<?php
namespace service;

use dao\mysql\CarroDAO;

class CarroService extends CarroDAO {
    public function listaCarros() {
        return parent::listar();
    }

    public function buscarDados() {
        if (isset($_GET["id"])) {
            $linha = parent::dados($_GET["id"]);
            if ($linha) {
                return $linha[0];
            }
        }
        return false;
    }

    public function salvarAlterar() {
        if (isset($_POST["id"])) {
            $dados = [
                "marca" => $_POST["marca"],
                "modelo" => $_POST["modelo"],
                "ano_fabricacao" => $_POST["ano_fabricacao"],
                "placa" => $_POST["placa"],
                "cor" => $_POST["cor"],
                "categoria" => $_POST["categoria"],
                "preco_diaria" => $_POST["preco_diaria"],
                "status" => $_POST["status"],
                "quilometragem" => $_POST["quilometragem"],
                "data_aquisicao" => $_POST["data_aquisicao"]
            ];
            $this->alterarCarro($_POST["id"], $dados);
        }
    }

    private function alterarCarro($id, $dados) {
        parent::alterar($id, $dados);
    }

    public function salvarCriar() {
        if (isset($_POST["marca"])) {
            $dados = [
                "marca" => $_POST["marca"],
                "modelo" => $_POST["modelo"],
                "ano_fabricacao" => $_POST["ano_fabricacao"],
                "placa" => $_POST["placa"],
                "cor" => $_POST["cor"],
                "categoria" => $_POST["categoria"],
                "preco_diaria" => $_POST["preco_diaria"],
                "status" => $_POST["status"],
                "quilometragem" => $_POST["quilometragem"],
                "data_aquisicao" => $_POST["data_aquisicao"]
            ];
            $this->criarCarro($dados);
        }
    }

    private function criarCarro($dados) {
        parent::criar($dados);
    }

    public function excluir($id) {
        parent::excluir($id);
    }
}
?>