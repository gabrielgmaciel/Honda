<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <?php   include "header.php";
            include "conecta.php";
            //include "update-admin.php";
    ?>
<body>
    <?php
        function listarForm($conexao)
        {
            $sql = "select * from carros";
            $result = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_assoc($result)) {
                ?>
                <form action="up-admin.php" method="post">
                <div class="container">
                    <div class="row">
                        <center>
<<<<<<< HEAD
                            <br><br>
=======
>>>>>>> gabriel

                                <table class="table table-hover">
                                    <?php if ($array['id'] == "Fit"){?>
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="Fit">
                                            <th>Honda Fit</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center><?php
                                                    echo "R$ ".$array['valor']; ?>
                                                </center>
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="decimalFilder" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr><?php }?>
                                    <?php if ($array['id'] == "City") { ?>
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="City">
                                            <th>Honda City</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center><?php
                                                    echo "R$ ".$array['valor']; ?>
                                                </center>
<<<<<<< HEAD
                                                <!--<input type="number" name="valorCity" class="form-control" placeholder="R$ = 00.000,00">-->
=======
>>>>>>> gabriel
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr> <?php } ?>
                                    <?php if ($array['id'] == "Civic") {?>
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="Civic">
                                            <th>Honda Civic</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center><?php
                                                    echo "R$ ".$array['valor']; ?>
                                                </center>
<<<<<<< HEAD
                                                <!--<input type="number" name="valorCivic" class="form-control" placeholder="R$ = 00.000,00">-->
=======
>>>>>>> gabriel
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr> <?php }?>
                                    <?php if ($array['id'] == "HR-V") {?>
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="HR-V">
                                            <th>Honda HR-V</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center><?php
                                                    echo "R$ ".$array['valor']; ?>
                                                </center>
<<<<<<< HEAD
                                                <!--<input type="number" name="valorHRV" class="form-control" placeholder="R$ = 00.000,00">-->
=======
>>>>>>> gabriel
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr><?php } ?>
                                    <?php if ($array['id'] == "Accord") {?>
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="Accord">
                                            <th>Honda Accord</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center><?php
                                                    echo "R$ ".$array['valor']; ?>
                                                </center>
<<<<<<< HEAD
                                                <!--<input type="number" name="valorAccord" class="form-control" placeholder="R$ = 00.000,00">-->
=======
>>>>>>> gabriel
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr> <?php } ?>
                                </table>

                                <div>
<<<<<<< HEAD
                                    <!--button type="button" class="btn btn-success">Inserir</button>
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                    <button type="button" class="btn btn-info">Pesquisar</button>-->
=======
>>>>>>> gabriel
                                    <?php if ($array['id'] == "HR-V") {?>
                                    <button type="submit" class="btn btn-warning">Alterar</button><?php } ?>
                                </div>
                        </center>
                    </div>
                </div>
                </form> <?php }
        }
        listarForm($conexao);
            ?>
<<<<<<< HEAD
        <br><br><br><br><br><br>
=======
        <br><br><br>
>>>>>>> gabriel
</body>
</html>