<?php
require_once(__DIR__ . "/../controller/HeroiController.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Marvel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/app.css">
</head>
<body>
    <h1>Session Marvel</h1>

    <form method="POST" action="salvar.php">
        <input type="text" name="nomeHeroi" placeholder="Ex: Homem-Aranha" >
        <input type="hidden" name="acao" value="salvar">

        <input type="text" name="poderHeroi" placeholder="Ex: Escalar Paredes">
        <input type="hidden" name="acao" value="salvar">

        <input type="text" name="origemHeroi" placeholder="Ex: Foi picado por uma aranha radioativa">
        <input type="hidden" name="acao" value="salvar">
        <button type="submit">Salvar Herói</button>
    </form>

    <form method="POST" action="alterar.php">
        <input type="text" name="nomeHeroi" placeholder="Novo nome">
        <input type="hidden" name="acao" value="alterar">

        <input type="text" name="poderHeroi" placeholder="Novo poder">
        <input type="hidden" name="acao" value="alterar">

        <input type="text" name="origemHeroi" placeholder="Nova origem">
        <input type="hidden" name="acao" value="alterar">
        <button type="submit">Alterar Herói</button>
    </form>

    <form method="POST" action="remover.php">
        <input type="hidden" name="acao" value="remover">
        <button type="submit">Remover Herói</button>
    </form>

    <?php if(! empty($erros)): ?>
    <div class="erros" role="alert">
        <?php foreach($erros as $erro): ?>
            <p><?= $erro ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</body>
</html>