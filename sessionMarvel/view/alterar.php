<?php
require_once(__DIR__ . "/../controller/HeroiController.php");
require_once(__DIR__ . "/../service/HeroiService.php");

$heroiService = new HeroiService();
$heroiCont = new HeroiController();

if ($_SERVER["REQUEST_METHOD"] == "POST") { //$_SERVER é outra superglobal do PHP que serve para guardar informações sobre a requisição atual e o servidor, nesse caso foi usado para descobrir qual método foi usado na requisição
    $heroiCont->alterar();
}

?>