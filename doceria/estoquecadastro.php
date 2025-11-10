<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de estoque</title>
</head>
<body>
    <form action="gravar_estoque.php" method="post">
        <h1>Cadastro de estoque</h1>
        <label for="id_prod">ID do produto</label>
        <br>
        <input name="id_prod" placeholder="Digite o ID do produto aqui" type="text">
        <br>
        <label for="quantidade">Quantidade</label>
        <br>
        <input name="quantidade" placeholder="Digite a quantidade aqui" type="text">
        <br>
        <label for="valor_uni">Valor unitário</label>
        <br>
        <input name="valor_uni" placeholder="Digite o valor unitário aqui em R$" type="text">
        <br>
        <label for="valor_min">Valor mínimo</label>
        <br>
        <input name="valor_min" placeholder="Digite o valor mínimo aqui em R$" type="text">
        <br>
        <a href="gravar_produtos.php">
            <input type="submit" value="Enviar">
        </a>

        <input type="submit" value="Consultar" formaction="consulta_produtos.php">
    </form>
</body>
</html>