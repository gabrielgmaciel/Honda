<html>
<header>
    <?php   include "header.php";
            include "s-login.php";
            //protegePagina();
    include "conecta.php";

    //recuparando o valor e juros do BD
    $id = $_POST["id"];
    $sql = "select valor from carros where id='{$id}'";
    $result = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_assoc($result)) {
        //echo "R$ ".$array['valor'];
        global $v;
        $v = $array['valor'];

    }
    $sql = "select juros from carros where id='{$id}'";
    $result = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_assoc($result)) {
        //echo "R$ ".$array['juros'];
        global $j;
        $j = $array['juros'];
    }
    function calculaJuros()
    {
        //atribuindo os valores buscados no BD para variáveis que serão utilizadas no calculoJuros()
        global $v;
        global $j;
        //criando variáreis nescessárias para o calculo
        global $entrada;
        $entrada = $_POST["entrada"];
        global $qtdparcelas;
        $qtdparcelas = $_POST["parcelas"];
        $valor = $v;
        //calculo dos juros
        $valorComEntrada = $valor - $entrada;
        $juros = $j / 100;
        $jurosPorParcela = $valorComEntrada * $juros;
        $parcela = $valorComEntrada / $qtdparcelas;
        global $parcelaComJuros;
        $parcelaComJuros = $parcela + $jurosPorParcela;
        $valorfinal = $parcelaComJuros * $qtdparcelas;
        /*echo "<br/>" . $valor . "<-valor do bd";
        echo "<br/>" . $juros . "<--juros do bd";
        echo "<br/>" . $jurosPorParcela . "<--valor dos juros por parcela";
        echo "<br/>" . $parcela . "<--valor das parcelas (valor final / quantidades de parcelas";
        echo "<br/>" . $valorComEntrada . "<--valor menos a entrada";
        echo "<br/>" . $entrada . "<--entrada";
        echo "<br/>" . $qtdparcelas . "<--quantidade de parcelas<br/>";
        echo "<br/>" . $parcelaComJuros . "<--valor das parcelas com juros<br/>";
        echo "<br/><br/>";
        echo "Valor:" . $valor . "<br/>";
        echo "Valor parcela:" . $parcela . "<br>";
        echo "Valor final:" . $valorfinal . "<br>";*/

        return $parcelaComJuros;
        return $entrada;




    }
    calculaJuros();
    ?>
    <style>

        /*****************globals*************/
        .body {
            font-family: 'open sans';
            overflow-x: hidden; }

        img {
            max-width: 100%; }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }

        .checked, .price span {
            color: #000000; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px; }

        .product-title {
            margin-top: 0; }

        .size {
            margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
            background: #00baff;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
            text-align: center;
            line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
            background: #ff9f1a; }

        .green {
            background: #85ad00; }

        .blue {
            background: #0076ad; }

        .tooltip-inner {
            padding: 1.3em; }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        /*# sourceMappingURL=style.css.map */
    </style>
</header>
<body>
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="imagens/accord/06.jpg" /></div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <center>
                        <h3 class="product-title">Honda Accord</h3>
                    </center>
                    <br><br><br>
                   <div>
                       <center>
                            <h4 class="price">Valor da entrada: <span><?php
                                    if ($entrada == null)
                                    {
                                        echo "Sem entrada";
                                    }else
                                    {
                                        setlocale(LC_MONETARY, 'pt_BR');
                                        echo "R$ " . number_format($entrada, 2);
                                    }?></span></h4>
                            <h4 class="price">Valor das parcelas: <span><?php echo $qtdparcelas." de "?>
                                    <?php setlocale(LC_MONETARY, 'pt_BR');
                                    echo "R$ " . number_format($parcelaComJuros, 2);

                                    ?>
                                </span></h4>

                       </center>
                   </div>
                    <br><br><br><br>
                    <div>
                        <center>
                            <p class="product-description"><h5>Sua proposta foi efetivada com sucesso! <br> Vá até uma concessioária mais proxima e garanta o seu veículo. </h5> <p> <h6> *Proposta válida por 30 dias.</h6></p></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
</body>
</html>