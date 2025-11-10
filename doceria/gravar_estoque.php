<?php
    include "conexao.php";

    $id_prod = $_POST["id_prod"];
    $quantidade = $_POST ["quantidade"];
    $valor_uni = $_POST ["valor_uni"]; 
    $valor_min = $_POST ["valor_min"]; 

    echo $id_prod;
    
    echo "<br>";
    echo $quantidade;

    echo "<br>";
    echo $valor_uni;

    echo "<br>";
    echo $valor_min;

    $query = mysqli_query($conexao, "insert into estoque (id_prod, qtd, valor_uni, valor_min) values ('$id_prod','$quantidade','$valor_uni','$valor_min');");

    echo("<br>Gravado! Deseja ir a consulta?");
    mysqli_close ($conexao);
?>