<?php
require_once(__DIR__ . "/../controller/HeroiController.php");
require_once(__DIR__ . "/../service/HeroiService.php");

$heroiCont = new HeroiController();
$heroiService = new HeroiService();

$heroiCont->exibir();

?>