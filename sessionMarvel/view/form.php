<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="salvar.php">
        <input type="text" name="nomeHeroi" placeholder="Ex: Homem-Aranha" required>
        <input type="hidden" name="acao" value="salvar">
        <button type="submit">Salvar Herói</button>
    </form>

    <form method="POST" action="alterar.php">
        <input type="text" name="nomeHeroi" placeholder="Novo nome" required>
        <input type="hidden" name="acao" value="alterar">
        <button type="submit">Alterar Herói</button>
    </form>

    <form method="POST" action="remover.php">
        <input type="hidden" name="acao" value="remover">
        <button type="submit">Remover Herói</button>
    </form>
</body>
</html>