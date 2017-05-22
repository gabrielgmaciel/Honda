<?php   include "conecta.php";
        include "s-login.php";
        protegePagina();
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
    //função não permitir o mesmo email cadastrado 2 vzs
    function validaEmail($email)
    {
        include "conecta.php";
        global $email,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$senha;
        $sql2 = "SELECT 'email' FROM cliente WHERE email = '{$email}'";
        $result = mysqli_query($conexao,$sql2);
        //
        $erro = mysqli_error($conexao);
        echo $erro;
        mysqli_num_rows($result);
        //verifica se o retorno que veio do banco é verdadeiro(1) ou falso (0)
        if(mysqli_num_rows($result) >  0 )
        {
            header("location: cadastro.php?login=0");
            //echo "teste funcao";
        }else
            {
                cadastraCliente($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha);
                header("location: index.php");

            }

    }

    /*if (cadastraCliente($conexao,$nome,$endereco,$cep,$tel_celular,$tel_residencial,$email,$senha))
    {
        header("location: index.php");
    }
    else
    {
        $error = mysqli_error($conexao);
        echo $error;

    }*/
    if ((empty($nome)==true) || (empty($email)==true))
    {
        header("location: cadastro.php?login=1");
    }elseif(validaEmail($email))
?>