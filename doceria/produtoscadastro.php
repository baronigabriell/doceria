<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="gravar_produtos.php" method="post">
        <h1>Cadastro de produtos</h1>
        <label for="nome">Nome</label>
        <br>
        <input name="nome" placeholder="Digite o nome aqui" type="text">
        <br>
        <label for="fabricante">Fabricante</label>
        <br>
        <input name="fabricante" placeholder="Digite o fabricante aqui" type="text">
        <br>
        <label for="descricao">Descrição</label>
        <br>
        <input name="descricao" placeholder="Descreva o produto aqui" type="text">
        <br>
        <label for="validade">Validade</label>
        <br>
        <input name="validade" placeholder="Descreva o produto aqui" type="date">
        <br>
        <a href="gravar_produtos.php">
            <input type="submit" value="Enviar">
        </a>

        <input type="submit" value="Consultar" formaction="consulta_produtos.php">
    </form>
</body>
</html>