<?php
namespace controller;

use service\AluguelService;
use view\AluguelView;

class AluguelController {
    private $aluguelService;

    public function __construct() {
        $this->aluguelService = new AluguelService();
    }

    public function listarAlugueis() {
        $alugueis = $this->aluguelService->listaAlugueis();
        $view = new AluguelView();
        $view->listaAlugueis($alugueis);
    }

    public function alterarAluguel() {
        $id = $_GET['id'];
        $aluguel = $this->aluguelService->buscarDados($id);
        $view = new AluguelView();
        $view->alterarAlugueis($aluguel);
    }

    public function salvarAlterarAluguel() {
        $id = $_POST['id'];
        $dados = $_POST;
        $this->aluguelService->salvarAlterar($id, $dados);
        header('Location: /mvc20242-patrick/index.php?rota=aluguel/lista');
    }

    public function criarAluguel() {
        $view = new AluguelView();
        $view->criarAluguel();
    }

    public function salvarCriarAluguel() {
        $dados = $_POST;
        $this->aluguelService->salvarCriar($dados);
        header('Location: /mvc20242-patrick/index.php?rota=aluguel/lista');
    }

    public function excluirAluguel() {
        $id = $_GET['id'];
        $this->aluguelService->excluir($id);
        header('Location: /mvc20242-patrick/index.php?rota=aluguel/lista');
    }
}
?>