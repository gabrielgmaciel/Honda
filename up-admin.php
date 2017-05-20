<?php include "conecta.php";

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
function teste($conexao,$id)
{
    //global $valor;
    //$valor=$_POST['valor'];
    global $juros;
    $juros = $_POST['juros'];

    /*if ($valor == null)
    {
        $sql = "select valor from carros WHERE id='{$id}'";
        $resultado = mysqli_query($conexao,$sql);
        if ($resultado)
        {
            $a = mysqli_fetch_assoc($resultado);
            return $a['valor'];
            $valor = $a['valor'];
        }

    }*/
    if ($juros == null)
    {
        $sql = "select juros from carros WHERE id='{$id}'";
        $valor = mysqli_query($conexao,$sql);
        return $valor;
    }

        $sql = "update carros set juros='{$juros}' WHERE id='{$id}'";
        //$sql="insert into carros (id,valor,juros) values ('{$id}','{$valor}','{$juros}')";
        $result = mysqli_query($conexao, $sql);
        return $result;
}
    /*if (alteraValorCarros($conexao,$id))
    {
       header("location: admin.php");
    }else
    {
        $error = mysqli_error($conexao);
        echo $error;
        //header("location: admin.php");
    }
    if (alteraJurosCarros($conexao,$id))
    {
        header("location: admin.php");
    }else
    {
        $error = mysqli_error($conexao);
        echo $error;
        //header("location: admin.php");
    }*/
    if (teste($conexao,$id))
    {
        echo $valor;
        echo "  <br/>    ";
        echo $juros;
        header("location: admin.php");
    }else
    {
        $error = mysqli_error($conexao);
        echo $error;
        //header("location: admin.php");
    }


?>



