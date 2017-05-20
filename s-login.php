<?php include "conecta.php";

	ini_set ('default_charset','UTF-8');
	
	//$l1="admin@gmail.com";
	//$pas="admin";
    //variáveis que recebem os dados de login.php
	//$logon=$_POST["login"];
	//$senha=$_POST["senha"];
    $_SG['abreSessao'] = true;
    $_SG['validaSempre'] = true;
    //verifica se há uma sessão iniciada
    if ($_SG['abreSessao'] == true)
        session_start();
    //valida login 2.0
    //função para validação do usuário
    function validaUsuario($logon,$senha)
    {
        global $_SG;
        include "conecta.php";
        $sql = "SELECT 'email','senha' FROM cliente WHERE email = '{$logon}' AND senha = '{$senha}'";
        $result = mysqli_query($conexao,$sql);
        //
        $erro = mysqli_error($conexao);
        echo $erro;
        mysqli_num_rows($result);
        //verifica se o retorno que veio do banco é verdadeiro(1) ou falso (0)
        if(mysqli_num_rows($result) >  0 )
        {
            $_SESSION['logon'] = $logon;
            $_SESSION['senha'] = $senha;
            header("location: index.php");
            return true;
        }
        //validaSempre
        if ($_SG['validaSempre'] == true)
        {
            // Definimos dois valores na sessão com os dados do login
            $_SESSION['usuarioLogin'] = $logon;
            $_SESSION['usuarioSenha'] = $senha;
        }
    }
    //função para proteger paginas que devem ser acessadas somente se tiver um log
    function protegePagina()
    {
        global $_SG;
        if (!isset($_SESSION['logon']) or !isset($_SESSION['senha']))
        {
            expulsaVisitante();
        }
        else
        {
            if ($_SG['validaSempre'] == true)
            {
                if (validaUsuario($_SESSION['usuarioLogin'],$_SESSION['usuarioSenha']))
                {
                    expulsaVisitante();
                }
            }
        }
    }
    //função para expulsar Visitante e redirecionar para a pagina login com erro de não logado
    function expulsaVisitante()
    {
        unset($_SESSION['logon']);
        unset($_SESSION['senha']);
        unset($_SESSION['usuarioLogin']);
        unset($_SESSION['usuarioSenha']);
        header ("location: login.php?login=1");
    }
    //valida login 1.0
    /*if($logon == $l1 && $senha == $pas)
		{
		    header ("location: admin.php?logon=admin");
        }
		else if (validaUsuario($logon,$senha) == true){

        }else
		{
            unset($_SESSION['logon']);
            unset($_SESSION['senha']);
            header ("location: login.php?login=0");
        }

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
            }*/



?>