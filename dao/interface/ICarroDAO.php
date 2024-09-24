<?php
namespace dao\interface;

interface ICarroDAO {
    public function listar();
    public function alterar($id, $dados);
    public function dados($id);
}
?>