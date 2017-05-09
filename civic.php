<html>
<?php include "header.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - Bootsnipp.com</title>
    <script type="text/javascript" src="js/001.js"></script>
    <script type="text/javascript" src="js/002.js"></script>
    <script type="text/javascript">$(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');

                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });</script>
</head>
<body>
<div>
    <center>
        <table width="100%" height="108">
            <tr>
                <td class="fixed" bgcolor="#1C1C1C" >
                    <center>
                        <img src="imagens/civic/civic.jpg"  alt="Cinque Terre" width="1000" height="350">
                    </center>
                </td>
            </tr>
        </table>
    </center>
</div>
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Galeria</h1>
            </div>

            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">Todas as Imagens</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">algumas Imagens</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">algumas Imagens</button>
                <button class="btn btn-default filter-button" data-filter="spray">algumas Imagens</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">algumas Imagens</button>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagens/civic/01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="imagens/civic/02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="imagens/civic/02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagens/civic/03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="imagens/civic/05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="imagens/civic/07.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/09.jpg" class="img-responsive">
            </div>





        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="imagens/civic/06.jpg" alt="" class="img-rounded img-responsive" /> <br>
                        <center><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Comprar</button></center>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h3>
                            Honda Accord</h3>
                        <small><cite title="San Francisco, USA">Brasília, BR <i class="glyphicon glyphicon-map-marker">
                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-ok"></i>Motor 3.5l V6 24V SOHC i-VTEC | Gasolina
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Potência de 280cv para 6.200 rpm</a>
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Torque de 34,6 Kgf.m para 4.900 rpm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-6 col-md-8">

                        <p>
                            <i class="glyphicon glyphicon-ok"></i>Transmissão automática de 6 velocidades com Paddle Shift
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Direção elétrica com assistência de estabilidade MA-EPS (Motion Adaptive - Electric Power Steering)</a>
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Suspensão traseira independente Multi-link</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br><br><br>
</body>

</html>
