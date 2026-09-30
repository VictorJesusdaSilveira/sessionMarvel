<?php
require_once(__DIR__ . "/../model/Heroi.php");

class HeroiService{

    public function validar(Heroi $heroi){
        $erros = array();
    
        if(! $heroi->getNome()){
            array_push($erros, "Insira o nome do herói!");
        }else if(strlen($heroi->getNome()) < 5 || strlen($heroi->getNome()) > 1000){
            array_push($erros, "O nome deve ter entre 5 a 1000 caracteres");
        }

        if(! $heroi->getPoder()){
            array_push($erros, "Insira o poder do herói!");
        }

        if(! $heroi->getOrigem()){
            array_push($erros, "Insira a origem do herói!");
        }

        return $erros;
    }

}

?>