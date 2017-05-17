<html>
    <?php include "header.php"; include "s-admin.php"?>
<body>
        <div class="container">
            <div class="row">
              <center>
               <br><br>
                  <table class="table table-bordered">
                      <table class="table table-hover">
                        <tr>
                            <div class="col-xs-3">
                                <th>Honda Fit</th>
                                <th>Valor:</th>
                                <th class="col-xs-3">
                                    <input type="text" name="id" formmethod="post" formaction="s-admin.php">
                                    <input type="number" name="valor" class="form-control" placeholder="R$ 0000.00" id="valorFit" value="15000.50">
                                </th>
                                <th>Juros:</th>
                                <th class="col-xs-3">
                                        <input type="number" name="JurosFit" class="form-control" placeholder="00,0 %">
                                </th>
                            </div>
                        </tr>
                        <tr><!--
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
                          <!--<button type="button" class="btn btn-success">Inserir</button>-->
                          <!--<button type="button" class="btn btn-danger">Excluir</button>--> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <!--<button type="button" class="btn btn-info">Pesquisar</button> -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <form action="s-admin.php" method="post"
                                  <input type="submit" class="btn btn-warning">Alterar</form> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                  <!--</table>-->
                </center>
             </div>
        </div>
<br><br><br><br><br><br>
</body>
</html>