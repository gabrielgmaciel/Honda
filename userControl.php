<html>
<header>
    <?php include "header.php"; ?>
    <?php require_once("conecta.php") ?>
</header>
<body>
<form action =alterarForm.php  method=GET>
    <br>
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

            function listaProdutos($conexao){

                $sql="select * from cliente";
                $resultado= mysqli_query($conexao,$sql );


                while($array=mysqli_fetch_assoc($resultado)) { ?>
                    <tr>

                        <td><center> <label class="checkbox-inline"> <input type="checkbox" name="lingua" id="lingua"> </label> </center></td>
                        <td> <input type=text value= <?php echo $array['nome'];?> > </td>
                        <td> <input type=text value= <?php echo $array['endereco'];?> > </td>
                        <td> <input type=text value= <?php echo $array['cep'];?>  > </td>
                        <td> <input type=text value= <?php echo $array['tel_celular'];?>  > </td>
                        <td> <input type=text value= <?php echo $array['tel_residencial'];?>  > </td>
                        <td> <input type=text value= <?php echo $array['email'];?>  > </td>
                    </tr>
                <?php }
            }

            listaProdutos($conexao);
            ?>
        </table>
        <a href="">
            <button type="button" class="btn btn-danger">Excluir</button>
        </a>
    </center>

</form>


</body>
</html>
