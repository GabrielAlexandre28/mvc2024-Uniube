<?php
namespace service;

use dao\mysql\AluguelDAO;

class AluguelService extends AluguelDAO {
    public function __construct() {
        parent::__construct();
    }

    public function listaAlugueis() {
        return parent::listar();
    }

    public function buscarDados($id) {
        $linha = parent::dados($id);
        if ($linha) {
            return $linha[0];
        }
        return false;
    }

    public function salvarAlterar($id, $dados) {
        parent::alterar($id, $dados);
    }

    public function salvarCriar($dados) {
        parent::criar($dados);
    }

    public function excluir($id) {
        parent::excluir($id);
    }
}
?>