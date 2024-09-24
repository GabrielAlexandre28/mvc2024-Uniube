<?php
namespace generic;

class Controller {
    private $arrChamadas = [];

    public function __construct() {
        $this->arrChamadas = [
            "cliente/lista" => new Acao("controller\ClienteController", "listarClientes"),
            "cliente/alterar" => new Acao("controller\ClienteController", "alterarCliente"),
            "cliente/salvarAlterar" => new Acao("controller\ClienteController", "salvarAlterarCliente"),
            "cliente/criar" => new Acao("controller\ClienteController", "criarCliente"),
            "cliente/salvarCriar" => new Acao("controller\ClienteController", "salvarCriarCliente"),
            "cliente/excluir" => new Acao("controller\ClienteController", "excluirCliente"),
            "carro/lista" => new Acao("controller\CarroController", "listarCarros"),
            "carro/alterar" => new Acao("controller\CarroController", "alterarCarro"),
            "carro/salvarAlterar" => new Acao("controller\CarroController", "salvarAlterarCarro"),
            "carro/criar" => new Acao("controller\CarroController", "criarCarro"),
            "carro/salvarCriar" => new Acao("controller\CarroController", "salvarCriarCarro"),
            "carro/excluir" => new Acao("controller\CarroController", "excluirCarro"),
            "aluguel/lista" => new Acao("controller\AluguelController", "listarAlugueis"),
            "aluguel/alterar" => new Acao("controller\AluguelController", "alterarAluguel"),
            "aluguel/salvarAlterar" => new Acao("controller\AluguelController", "salvarAlterarAluguel"),
            "aluguel/criar" => new Acao("controller\AluguelController", "criarAluguel"),
            "aluguel/salvarCriar" => new Acao("controller\AluguelController", "salvarCriarAluguel"),
            "aluguel/excluir" => new Acao("controller\AluguelController", "excluirAluguel"),
        ];
    }

    public function verificarCaminho($rota) {
        if (isset($this->arrChamadas[$rota])) {
            $this->arrChamadas[$rota]->executar();
        } else {
            include 'public/NaoExiste.php';
        }
    }
}
?>