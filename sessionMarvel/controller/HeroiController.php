<?php
require_once(__DIR__ . "/../model/Heroi.php");
require_once(__DIR__ . "/../service/HeroiService.php");

class HeroiController{
    private HeroiService $heroiService;

    public function __construct(){
        $this->heroiService = new HeroiService();
        session_start();
    }

    public function salvar(string $nome, string $poder, string $origem,){
        if($_POST["heroi"]){
            return "Um herói ja está cadastrado, remova-o para adicionar outro";
        }

        $heroi = new Heroi($nome, $poder, $origem);
        $erros = $this->heroiService->validar($heroi);

        if(empty($erros)){
            $_SESSION["heroi"] = $heroi;
        }

        return $erros;
    }

    public function exibir(){
        if(! isset($_SESSION["heroi"])){
            return "Sessão não existe!";
        }
        $heroi = $_SESSION["heroi"];
        $erros = $this->heroiService->validar($heroi);

        if (!empty($erros)) {
            return $erros;
        }
        return $heroi->getNome() . "|" . $heroi->getPoder() . "|" . $heroi->getOrigem();
    }

    public function remover(){
        session_unset();
        session_destroy();

    }

    public function alterar(){ 
     
    }

}
?>