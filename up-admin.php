<?php   include "conecta.php";
        include "s-login.php";
        protegePagina();
    //criando vaviáveis que receberam dados de admin.php

    $id=$_POST['id'];

    //função para alterar valor da tabela carros
    function alteraValorCarros($conexao,$id)
    {
        global $valor;
        $valor=$_POST['valor'];
        global $juros;
        $juros=$_POST['juros'];

        if ($valor == null)
        {
            die();
        }else
        {
            $sql="update carros set valor='{$valor}' WHERE id='{$id}'";
            //$sql="insert into carros (id,valor,juros) values ('{$id}','{$valor}','{$juros}')";
            $result=mysqli_query($conexao,$sql);
            return $result;
        }
    }
    function alteraJurosCarros($conexao,$id)
    {
        //global $valor;
        //$valor=$_POST['valor'];
        global $juros;
        $juros=$_POST['juros'];

        if ($juros == null)
        {
            die();
        }else
        {
            $sql="update carros set juros='{$juros}' WHERE id='{$id}'";
            //$sql="insert into carros (id,valor,juros) values ('{$id}','{$valor}','{$juros}')";
            $result=mysqli_query($conexao,$sql);
            return $result;
        }
    }
        if (alteraJurosCarros($conexao,$id))
        {
                header("location: admin.php?admin=0");
        }else
        {
            $error = mysqli_error($conexao);
            echo $error;
            //header("location: admin.php");
        }


?>



