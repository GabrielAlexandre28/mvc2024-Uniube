<?php
namespace controller;

use service\ClienteService;
use view\ClienteView;

class ClienteController {

    public function listarClientes() {
        $clienteServ = new ClienteService();
        $retorno = $clienteServ->listaClientes();
        $clienteView = new ClienteView();
        $clienteView->listaClientes($retorno);
    }

    public function alterarCliente() {
        if (isset($_GET["id"])) {
            $clienteServ = new ClienteService();
            $retorno = $clienteServ->buscarDados();
            $clienteView = new ClienteView();
            $clienteView->alterarClientes($retorno);
        } else {
            echo "ID do cliente não especificado!";
        }
    }

    public function salvarAlterarCliente() {
        $clienteServ = new ClienteService();
        $clienteServ->salvarAlterar();
        $this->listarClientes();
    }

    public function criarCliente() {
        $clienteView = new ClienteView();
        $clienteView->criarCliente();
    }

    public function salvarCriarCliente() {
        $clienteServ = new ClienteService();
        $clienteServ->salvarCriar();
        $this->listarClientes();
    }

    public function excluirCliente() {
        if (isset($_GET["id"])) {
            $clienteServ = new ClienteService();
            $clienteServ->excluir($_GET["id"]);
            $this->listarClientes();
        } else {
            echo "ID do cliente não especificado!";
        }
    }
}
?>