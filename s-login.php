<?php include "conecta.php";

	ini_set ('default_charset','UTF-8');
	
	$l1="admin@gmail.com";
	$pas="admin";
    //variáveis que recebem os dados de login.php
	$logon=$_POST["login"];
	$senha=$_POST["senha"];

	if($logon == $l1 && $senha == $pas)
		{
		    header ("location: admin.php?logon=admin");
        }
		else
		{
		    //iniciando a sessão
            session_start();
            //
            $sql = "SELECT 'email','senha' FROM cliente WHERE email = '{$logon}' AND senha = '{$senha}'";
            $result = mysqli_query($conexao,$sql);
            //
            $erro = mysqli_error($conexao);
            echo $erro;
            mysqli_num_rows($result);

            if(mysqli_num_rows($result) >  0 )
            {
                $_SESSION['logon'] = $logon;
                $_SESSION['senha'] = $senha;
                header("location: index.php?login=0");
            } else
            {
                unset($_SESSION['logon']);
                unset($_SESSION['senha']);
                header ("location: login.php?login=0");
            }
		}

?>