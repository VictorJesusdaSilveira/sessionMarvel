<?php
require_once(__DIR__ . "/../controller/HeroiController.php");
require_once(__DIR__ . "/../service/HeroiService.php");

$heroiService = new HeroiService();
$heroiCont = new HeroiController();

$heroiCont->salvar($_POST["nomeHeroi"], $_POST["poderHeroi"], $_POST["origemHeroi"]);

header("Location: form.php");
?>