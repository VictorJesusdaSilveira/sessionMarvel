<?php
require_once(__DIR__ . "/../model/Heroi.php");
require_once(__DIR__ . "/../service/HeroiService.php");

class HeroiController{
    private HeroiService $heroiService;

    public function __construct(){
        $this->heroiService = new HeroiService();
        session_start();
    }

    public function salvar(string $nome){
        $_SESSION["heroi"] = new Heroi($nome);
    }

    public function exibir(){
        print $_SESSION["heroi"]->getNome();
    }

    public function remover(){

    }

    public function alterar(){
        
    }



}




?>