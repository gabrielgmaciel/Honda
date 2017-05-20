<?php include "conecta.php";
    //criando variaveis para receber dados de cadastro.php
    $nome=$_POST["nome"];
    $endereco=$_POST["endereco"];
    $cep=$_POST["cep"];
    $tel_celular=$_POST["tel_celular"];
    $tel_residencial=$_POST["tel_residencial"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];

    //criando funcao para alimentar a tabela "cliente" no bd
    function cadastraCliente($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha)
    {
        $sql = "INSERT INTO cliente (nome,endereco,cep,tel_celular,tel_residencial,email,senha) VALUES
                ('{$nome}','{$endereco}','{$cep}','{$tel_celular}','{$tel_residencial}','{$email}','{$senha}')";
        return mysqli_query($conexao,$sql);
    }
    //
    if (cadastraCliente($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha))
    {
        header("location: index.php");
    }
    else
    {
        $error = mysqli_error($conexao);
        echo $error;

    }

?>