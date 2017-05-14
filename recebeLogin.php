<?php
    include "s-login.php";

    $l1="admin@gmail.com";
    $pas="admin";
    //variáveis que recebem os dados de login.php
    $logon=$_POST['login'];
    $senha=$_POST['senha'];
    if ($logon == $l1 && $senha == $pas)
    {
        header ("location: admin.php?logon=admin");
    }else if (validaUsuario($logon, $senha) == true) {
        // O usuário e a senha digitados foram validados
        header("Location: index.php");
    } else {
        // O usuário e/ou a senha são inválidos, manda de volta pro form de login com o erro
        unset($_SESSION['logon']);
        unset($_SESSION['senha']);
        header ("location: login.php?login=0");
    }
?>