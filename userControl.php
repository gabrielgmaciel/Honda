<html>
<header>
    <?php include "header.php"; ?>
    <?php require_once("conecta.php") ?>
</header>
<body>
<style>
    table {
        max-width: 100%;
        background-color: transparent;
        border-collapse: collapse;
        border-spacing: 0;
        font-family:;
    }

    .table {
        border-bottom: #999999 solid 1px;
        width: 100%;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        border-right: #999999 solid 0px;
        font-size: 12px;
        padding: 8px;
        line-height: 20px;
        text-align: left;
        vertical-align: middle;
    }

    .table td:last-child {
        border-right: 0;
    }

    .table thead th {
        font-weight: normal;
        background-color: #005dab;
        color: #fff;
        font-size: 15px;
    }

    .table tbody > tr:nth-child(odd) > td,
    .table tbody > tr:nth-child(odd) > th {
        background-color: #f8f8f8;
    }


    /* Small Sizes */
    @media (max-width: 767px) {

        /* Responsive Table */
        .table-responsive {
            display: block;
            position: relative;
            width: 100%;
        }

        .table-responsive thead,
        .table-responsive tbody,
        .table-responsive th,
        .table-responsive td,
        .table-responsive tr {
            display: block;
        }
        .table-responsive td,
        .table-responsive th {
            height: 35px;
        }

        .table-responsive thead {
            float: left;
        }

        .table-responsive tbody {
            width: auto;
            position: relative;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }

        .table-responsive tbody tr {
            display: inline-block;
        }


        .table td:last-child {
            border-right: #999999 solid 1px;
        }


    }
</style>
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