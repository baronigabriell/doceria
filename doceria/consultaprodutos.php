<?php
include "conexao.php";

if (isset($_GET['id_prod'])) {
    $id_prod = $_GET['id_prod'];

    $id_prod = mysqli_real_escape_string($conexao, $id_prod);

    $query = "SELECT * FROM produto WHERE id_prod = '$id_prod'";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
        echo "<h2>Detalhes do produto ID: " . $dados['id_prod'] . "</h2>";
        echo "ID Produto: " . $dados['id_prod'] . "<br>";
        echo "Nome: " . $dados['nome'] . "<br>";
        echo "Fabricante: " . $dados['fabricante'] . "<br>";
        echo "Descrição: " . $dados['descricao'] . "<br>";
        echo "Validade: " . $dados['validade'] . "<br>";
        echo "<a href='consultaprodutos.php'><Button>Voltar</Button></a>";
    } else {
        echo "Nenhum registro encontrado para o ID informado.";
    }
} else {
    $query = "SELECT id_prod FROM produto";
    $resultado = mysqli_query($conexao, $query);

    echo "<h2>Escolha um ID de produto para ver os detalhes</h2>";
    echo "<form action='consultaprodutos.php' method='get'>";
    echo "<label for='id_prod'>Selecione um ID de produto:</label>";
    echo "<select name='id_prod' id='id_prod' required>";

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<option value='" . $linha['id_prod'] . "'>ID: " . $linha['id_prod'] . "</option>";
        }
    } else {
        echo "<option value=''>Nenhum item encontrado</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Ver detalhes'>";
    echo "</form>";
}

mysqli_close($conexao);
?>
