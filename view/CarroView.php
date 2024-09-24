<?php

namespace view;

use generic\View;
use template\UsuarioTemp;

class CarroView extends View {
    public function __construct() {
        parent::__construct(new UsuarioTemp());
    }

    public function listaCarros($dados) {
        $this->conteudo("public/ListaCarro.php", $dados);
    }

    public function alterarCarros($dados) {
        $this->conteudo("public/AlterarCarro.php", $dados);
    }

    public function criarCarro() {
        $this->conteudo("public/CriarCarro.php");
    }
}
?>