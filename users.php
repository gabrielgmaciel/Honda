<html>
<header>
    <?php include "header.php"; ?>
    <?php require_once("conecta.php") ?>
</header>
<body>
<form action="userControl.php"  method=post>
    <br>
    <div><center><?php
            if(isset ($_GET["user"]) && $_GET["user"]==0)
            {?>
            <p class="alert-success" style="width:100%">
                Usuário deletado com sucesso ! !
            </p>
            <?php } ?>
        </center></div>

    <a href="admin.php">
        <button type="button" class="btn btn-success">Preço dos Veículos</button>
    </a>
    <br><br>
    <center>
        <table class="table table-hover" width="80%">
            <tr>
                <center>
                    <td>Select</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>CEP</td>
                    <td>Celular</td>
                    <td>Residencial</td>
                    <td>E-mail</td>
                </center>
            </tr>
            <?php

            function listaProdutos($conexao)
            {

                $sql="select * from cliente";
                $resultado= mysqli_query($conexao,$sql );


                while($array=mysqli_fetch_assoc($resultado)) { global $id; $id = $array['id_cliente']?>
                    <tr>

                        <td><center> <label class="checkbox-inline"> <input type="radio" name="id" id="id" value="<?php echo $id;?>"> </label> </center></td>
                        <td> <?php echo $array['nome'];?></td>
                        <td> <?php echo $array['endereco'];?></td>
                        <td> <?php echo $array['cep'];?></td>
                        <td> <?php echo $array['tel_celular'];?></td>
                        <td> <?php echo $array['tel_residencial'];?></td>
                        <td> <?php echo $array['email'];?></td>
                    </tr>
                <?php
                }
            }

            listaProdutos($conexao);

            ?>
        </table>

            <button type="submit" class="btn btn-danger">Excluir</button>

    </center>

</form>


</body>
</html>
