<?php
require_once(__DIR__ . "/../controller/HeroiController.php");
require_once(__DIR__ . "/../service/HeroiService.php");

$heroiService = new HeroiService();
$heroiCont = new HeroiController();

$heroiCont->alterar($_POST["nome"], $_POST["poder"], $_POST["origem"]);

header("Location: form.php");
?>