<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <?php   include "header.php";
            include "conecta.php";
            //include "recebeLogin.php";
            //protegeAdmin();
    ?>
<body> <br>
    <div><center><?php
            if(isset ($_GET["admin"]) && $_GET["admin"]==0)
            {?>
                <p class="alert-success" style="width:100%">
                    Juros alterados com sucesso ! !
                </p>
            <?php } ?>
        </center></div>
<a href="users.php">
    <button type="button" class="btn btn-success">Usuários</button>
</a>
<br><br>
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
                                            <th><button type="submit" class="btn btn-warning">Alterar</button></th>
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
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                            <th><button type="submit" class="btn btn-warning">Alterar</button></th>
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
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                            <th><button type="submit" class="btn btn-warning">Alterar</button></th>
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
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                            <th><button type="submit" class="btn btn-warning">Alterar</button></th>
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
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                            <th><button type="submit" class="btn btn-warning">Alterar</button></th>
                                        </div>
                                    </tr> <?php } ?>
                                </table>
                        </center>
                    </div>
                </div>
                </form> <?php }
        }
        listarForm($conexao);
            ?>
<br><br><br>
</body>
</html>