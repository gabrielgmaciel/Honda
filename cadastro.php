<html>
<?php include "header.php" ?>
<head>
    
<meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
</script>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" action="s-cadastro.php" method="post">
                        <h2>Cadastre-se ou faça seu <a href="login.php">Login</a></h2>
                        <hr class="colorgraph">
                        <?php
                        if(isset ($_GET["login"]) && $_GET["login"]==1)
                        {?>
                            <p class="alert-danger" style="width:100%">
                                Preencha os campos obrigatórios (*)! !
                            </p>
                            <?php
                        }
                        ?>

                        <div class="form-group">
                            <input type="text" name="nome" id="nome" class="form-control input-lg" placeholder="Nome Completo*" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="text" name="endereco" id="endereco" class="form-control input-lg" placeholder="Endereço" tabindex="2">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cep" id="cep" class="form-control input-lg" placeholder="CEP" tabindex="3">
                        </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input  maxlength="12" name="tel_celular" id="telcelular" class="form-control input-lg" placeholder="Tel. Celular" tabindex="4">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" maxlength="12" name="tel_residencial" id="telcasa" class="form-control input-lg" placeholder="Tel. Residêncial" tabindex="5">
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Endereço de E-Mail*" tabindex="6">
                            <?php
                            if(isset ($_GET["login"]) && $_GET["login"]==0)
                            {?>
                                <p class="alert-danger" style="width:100%">
                                    Email já cadastrado! !
                                </p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="senha" id="senha" class="form-control input-lg" placeholder="Senha" tabindex="7">
                                </div>
                            </div>

                        </div>

                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6"><input type="submit" value="Cadastrar" class="btn btn-primary btn-block btn-lg" tabindex="8"></div>
                            <div class="col-xs-12 col-md-6"><input type="reset" value="Excluir" class="btn btn-danger btn-block btn-lg" tabindex="9"></div>
                        </div>
                    </form>
                </div>
            </div><br><br><br><br>
        </div>
    </body>
</html>
