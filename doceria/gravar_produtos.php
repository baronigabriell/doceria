<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $fabricante = $_POST ["fabricante"];
    $descricao = $_POST ["descricao"]; 
    $validade = $_POST ["validade"]; 

    echo $nome;
    
    echo "<br>";
    echo $fabricante;
    
    echo "<br>";
    echo $descricao;

    echo "<br>";
    echo $validade;

    $query = mysqli_query($conexao, "insert into produto (nome, fabricante, descricao, validade) values ('$nome','$fabricante','$descricao','$validade');");

    $id_prod = mysqli_insert_id($conexao);

    echo("<br>Gravado!");
    echo "ID do produto: " . $id_prod . "<br>";
    mysqli_close ($conexao);
?>