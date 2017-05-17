<?php include "conecta.php";
    //criando vaviáveis que receberam dados de admin.php
    $id=$_POST['id'];

    //função para alterar os dados da tabela carros
    function alteraCarros($conexao)
    {
        $valor=$_POST['valor'];
        $juros=$_POST['juros'];

        $sql="update from carros set valor='{$valor}',juros='{$juros}' WHERE id='{$id}'";
        $result=mysqli_query($conexao,$sql);
        return $result;
    }
    //função para pesquisar os valores já inseridos no BD
    /*function buscaCarro($conexao)
    {
        $sql="select 'id' from carros where id = 'idFit'";
        $result=mysqli_query($conexao,$sql);
        return $result;

        while ($array=mysqli_fetch_assoc($result));
    }*/



?>