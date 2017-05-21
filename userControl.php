<?php   include "header.php";
        require_once("conecta.php");
        include "s-login.php";
        protegePagina();


            $id = $_POST["id"];

            function listaProdutos($conexao)
            {

                $sql="select * from cliente";
                $resultado= mysqli_query($conexao,$sql );


                while($array=mysqli_fetch_assoc($resultado)) { ?>
                    <tr>

                        <td><center> <label class="checkbox-inline"> <input type="checkbox" name="lingua" id="lingua"> </label> </center></td>
                        <td> <?php echo $array['nome'];?></td>
                        <td> <?php echo $array['endereco'];?></td>
                        <td> <?php echo $array['cep'];?></td>
                        <td> <?php echo $array['tel_celular'];?></td>
                        <td> <?php echo $array['tel_residencial'];?></td>
                        <td> <?php echo $array['email'];?></td>
                    </tr>
                <?php
                global $id;
                $id = $array['id'];}
            }

            //listaProdutos($conexao);
            function excluiClienteOTARO($conexao)
            {
                global $id;
                $id = $_POST["id"];
                $sql = "delete from cliente where id_cliente='{$id}'";
                $result = mysqli_query($conexao,$sql);
                return $result;
            }
            if (excluiClienteOTARO($conexao))
            {
                header("location: users.php?user=0");
            }

            echo "<br/>";
            echo "id do cliente-->".$id;
?>
