<html xmlns="http://www.w3.org/1999/html">
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
                            <br><br>

                                <table class="table table-hover">
                                    <tr>
                                        <div class="col-xs-3">
                                            <input type="hidden" name="id" value="Fit">
                                            <th>Honda Fit</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <center>
                                                    <?php echo "R$ ".$array['valor']; ?>
                                                </center>
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="decimalFilder" name="juros" class="form-control"
                                                       placeholder="<?php echo $array['juros']." %"; ?>">
                                            </th>
                                        </div>
                                    </tr>
                                    <!--<tr>
                                        <div class="col-xs-3">
                                            <th>Honda City</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="valorCity" class="form-control" placeholder="R$ = 00.000,00">
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="JurosCity" class="form-control" placeholder="00,0 %">
                                            </th>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="col-xs-3">
                                            <th>Honda Civic</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="valorCivic" class="form-control" placeholder="R$ = 00.000,00">
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="JurosCivic" class="form-control" placeholder="00,0 %">
                                            </th>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="col-xs-3">
                                            <th>Honda HR-V</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="valorHRV" class="form-control" placeholder="R$ = 00.000,00">
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="JurosHRV" class="form-control" placeholder="00,0 %">
                                            </th>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="col-xs-3">
                                            <th>Honda Accord</th>
                                            <th>Valor:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="valorAccord" class="form-control" placeholder="R$ = 00.000,00">
                                            </th>
                                            <th>Juros:</th>
                                            <th class="col-xs-3">
                                                <input type="number" name="JurosAccord" class="form-control" placeholder="00,0 %">
                                            </th>
                                        </div>
                                    </tr>-->
                                </table>
                                <br>
                                <div>
                                    <!--button type="button" class="btn btn-success">Inserir</button>
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                    <button type="button" class="btn btn-info">Pesquisar</button>-->
                                    <button type="submit" class="btn btn-warning">Alterar</button>
                                </div>
                        </center>
                    </div>
                </div>
                </form> <?php }
        }
        listarForm($conexao);
            ?>
        <br><br><br><br><br><br>
</body>
</html>