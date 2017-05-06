<?php

	ini_set ('default_charset','UTF-8');
	
	$l1="admin@gmail.com";
	$pas="admin";
	
	$logon=$_GET["logon"];
	$senha=$_GET["senha"];

		if($logon == $l1)
		{
			if($senha == $pas)
			{
                if($logon == "admin@gmail.com")
                    {
                        header ("location: admin.php?logon=admin");
                    }
                    else
                    {
                        header ("location: index.php?logon=admin");
                    }
			}
		}
		else
		{
			header ("location: login.php?login=0");
		}

?>