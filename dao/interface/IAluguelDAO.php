<?php
namespace dao\interface;

interface IAluguelDAO {
    public function listar();
    public function alterar($id, $dados);
    public function dados($id);
}
?>