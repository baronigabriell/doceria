<?php
include "conexao.php";

if (isset($_GET['id_esto'])) {
    $id_esto = $_GET['id_esto'];

    $id_esto = mysqli_real_escape_string($conexao, $id_esto);

    $query = "SELECT * FROM estoque WHERE id_esto = '$id_esto'";
    $resultado = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_assoc($resultado);
        echo "<h2>Detalhes do estoque ID: " . $dados['id_esto'] . "</h2>";
        echo "ID Produto: " . $dados['id_prod'] . "<br>";
        echo "Quantidade: " . $dados['qtd'] . "<br>";
        echo "Valor unitário: R$ " . number_format($dados['valor_uni'], 2, ',', '.') . "<br>";
        echo "Valor mínimo: R$ " . number_format($dados['valor_min'], 2, ',', '.') . "<br>";
        echo "<a href='consultaestoque.php'><Button>Voltar</Button></a>";
    } else {
        echo "Nenhum registro encontrado para o ID informado.";
    }
} else {
    $query = "SELECT id_esto, id_prod FROM estoque";
    $resultado = mysqli_query($conexao, $query);

    echo "<h2>Escolha um ID de estoque para ver os detalhes</h2>";
    echo "<form action='consultaestoque.php' method='get'>";
    echo "<label for='id_esto'>Selecione um ID de estoque:</label>";
    echo "<select name='id_esto' id='id_esto' required>";

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<option value='" . $linha['id_esto'] . "'>ID: " . $linha['id_esto'] . "</option>";
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
