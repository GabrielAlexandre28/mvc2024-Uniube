<?php
namespace controller;

use service\CarroService;
use view\CarroView;

class CarroController {

    public function listarCarros() {
        $carroServ = new CarroService();
        $retorno = $carroServ->listaCarros();
        $carroView = new CarroView();
        $carroView->listaCarros($retorno);
    }

    public function alterarCarro() {
        $carroServ = new CarroService();
        $retorno = $carroServ->buscarDados();
        $carroView = new CarroView();
        $carroView->alterarCarros($retorno);
    }

    public function salvarAlterarCarro() {
        $carroServ = new CarroService();
        $carroServ->salvarAlterar();
        $this->listarCarros();
    }

    public function criarCarro() {
        $carroView = new CarroView();
        $carroView->criarCarro();
    }

    public function salvarCriarCarro() {
        $carroServ = new CarroService();
        $carroServ->salvarCriar();
        $this->listarCarros();
    }

    public function excluirCarro() {
        if (isset($_GET["id"])) {
            $carroServ = new CarroService();
            $carroServ->excluir($_GET["id"]);
            $this->listarCarros();
        }
    }
}
?>