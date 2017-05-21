<html>
<header>
    <?php   include "header.php";
            include "s-login.php";
            protegePagina();
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
                        <div class="tab-pane active"><img src="imagens/civic/10.jpg" /></div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Honda Civic</h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>

                    <p class="product-description">A Honda Automóveis do Brasil oferece, por um prazo de 2 anos a partir da Nota Fiscal de Vendas do veículo zero, o serviço de Assistência 24 horas, do qual poderá dispor, em caso de acidente, furto, roubo ou pane (de origem elétrica ou mecânica), com cobertura em qualquer parte do Brasil, Argentina, Uruguai ou Paraguai.</p>
                    <form action="civic3.php" method="post">
                    <h4 class="price">Preço do Veículo: <span>
                            <?php
                            $sql = "select valor from carros where id='Civic'";
                            $result=mysqli_query($conexao,$sql);
                            while ($array = mysqli_fetch_assoc($result)){
                                echo "R$ ".$array['valor'];
                            } ?></span></h4>
                    <div class="form-group form-inline">
                        <input type="hidden" name="id" value="Civic">
                        <h4 class="sizes">Entrada:   <input type="number" class="form-control" name="entrada" placeholder="R$ 000.000,00"></h4>
                        <h4 class="sizes">Parcelas:
                            <select class="form-control" name="parcelas">
                                <option value="1">0x</option>
                                <option value="12">12x</option>
                                <option value="24">24x</option>
                                <option value="36">36x</option>
                                <option value="48">48x</option>
                                <option value="60">60x</option>
                            </select>
                        </h4>
                    </div>
                    <div class="action">
                            <button class="btn btn-success" type="submit">Enviar Proposta</button>
                        </form>
                        <input type="reset" class="btn btn-warning" value="Apagar Campos">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
</body>
</html>