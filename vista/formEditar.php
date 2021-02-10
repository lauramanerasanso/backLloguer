<?php
include_once '../php/controlAcces.php';

if (isset($_GET['id'])) {
    $idCasa = $_GET['id'];
}
?>

<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Form Editar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/css/_general.css"/>

</head>

<body>

<?php include('header.php') ?>
<div class="container-fluid">
    <div class="d-flex">
        <a href="gestioCasa.php?id=<?=$idCasa?>" class="btn mr-auto"><i class="fas fa-arrow-left"></i> Torna</a>
    </div>
</div>
<div class="container" id="c">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dades-tab" data-toggle="tab" href="#dades" role="tab" aria-controls="dades"
               aria-selected="true">Dades Generals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="caract-tab" data-toggle="tab" href="#caract" role="tab" aria-controls="caract"
               aria-selected="false">Característiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ubi-tab" data-toggle="tab" href="#ubi" role="tab" aria-controls="ubi"
               aria-selected="false">Ubicació</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tarifa-tab" data-toggle="tab" href="#tarifa" role="tab" aria-controls="tarifa"
               aria-selected="false">Tarifes</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="dades" role="tabpanel" aria-labelledby="dades-tab">
            <div class="container">
                <h5 style="margin-top: 2%;">Dades generals :</h5>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label class="control-label">Nom</label>

                        <input type="text" name="nomCasa" id="nomCasa" class="form-control col-10">


                    </div>

                    <div class="form-group col-6">
                        <label class="control-label">Name</label>

                        <input type="text" name="nomAngles" id="nomCasaAngles" class="form-control col-10">


                    </div>
                </div>
                <br/>
                <div class="form-row">
                    <div class="form-group col-6">

                        <label class="control-label" for="desc1">Descripció</label>

                        <textarea class="form-control col-10" id="descripcio" rows="5"></textarea>
                    </div>
                    <div class="form-group col-6">

                        <label class="control-label" for="inlineFormCustomSelect">Description</label>

                        <textarea class="form-control col-10" id="descripcioAngles" rows="5"></textarea>
                    </div>


                </div>
                <br/>
                <div class="d-flex">
                    <button class="btn col-md-2 ml-auto" id="continuar">Continuar</button>
                </div>
            </div>


        </div>


        <div class="tab-pane fade" id="caract" role="tabpanel" aria-labelledby="caract-tab">
            <div class="container con">
                <h4 style="margin-top: 2%;">Característiques :</h4>
                <fieldset>
                    <legend id="leg1">Distribució</legend>
                    <div class="row">

                        <label class="control-label col-md-2 col-sm-3 offset-md-1" for="inlineFormCustomSelect">Num
                            Habitacions</label>
                        <div class="col-xl-1 col-md-2 col-sm-1">
                            <select class="custom-select" id="hab">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>


                        <label class="control-label col-md-2 col-sm-2 offset-md-2" for="inlineFormCustomSelect">Num
                            Banys</label>
                        <div class="col-xl-1 col-md-2 col-sm-1">
                            <select class="custom-select" id="banys">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                    </div>


                </fieldset>

                <fieldset>
                    <legend id="leg2">Serveis</legend>
                    <div class="row">

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="piscina">
                                <label class="form-check-label" for="defaultCheck1">
                                    Piscina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" id="aire">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aire Acondicionat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="calefaccio">
                                <label class="form-check-label" for="defaultCheck1">
                                    Calefacció
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" id="parking">
                                <label class="form-check-label" for="defaultCheck1">
                                    Aparcament
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" id="tv">
                                <label class="form-check-label" for="defaultCheck1">
                                    TV Satèl.lit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="6" id="wifi">
                                <label class="form-check-label" for="defaultCheck1">
                                    WI-FI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="7" id="caixa">
                                <label class="form-check-label" for="defaultCheck1">
                                    Caixa fort
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="8" id="bressol">
                                <label class="form-check-label" for="defaultCheck1">
                                    Bressol
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4 col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="9" id="xemeneia">
                                <label class="form-check-label" for="defaultCheck1">
                                    Xemeneia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="10" id="bbq">
                                <label class="form-check-label" for="defaultCheck1">
                                    Barbacoes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="11" id="jardi">
                                <label class="form-check-label" for="defaultCheck1">
                                    Jardí o terrassa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="12" id="animals">
                                <label class="form-check-label" for="defaultCheck1">
                                    Admet animals de companyia
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <br/>
            <div class="d-flex">
                <button class="btn  col-md-2 ml-auto" id="continuar2">Continuar</button>
            </div>

        </div>

        <div class="tab-pane fade" id="ubi" role="tabpanel" aria-labelledby="ubi-tab">
            <div class="container">
                <h4 style="margin-top: 2%;">Coordenades :</h4>
                <div class="row">

                    <div id="googleMap" style="width:100%;height:400px;margin:10px;align-content: center"></div>

                </div>
                <div class="row" style="margin-top: 2%;">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Longitud</label>
                    <input type="text" class="form-control col-3" id="x">

                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Latitud</label>
                    <input type="text" class="form-control col-3" id="y">

                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Població</label>
                    <input type="text" class="form-control col-3" id="pob">
                </div>
                <br/>

                <br/>
                <div class="d-flex">
                    <button class="btn  col-md-2 ml-auto" id="continuar3">Continuar</button>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="tarifa" role="tabpanel" aria-labelledby="imatges-tab">
            <div class="container">
                <h4 style="margin-top: 2%;">Tarifa:</h4>
                <div class="row" style="margin-top: 2%;">
                    <label class="control-label col-xl-2 col-md-3 col-sm-3" for="inlineFormCustomSelect">Preu
                        Defecte</label>
                    <input type="text" class="form-control col-xl-4 col-md-4 col-sm-3" id="preuDefecte">

                </div>


            </div>

            <br/>
            <div class="d-flex">
                <button class="btn col-md-2 ml-auto" id="continuar4">Modificar</button>
            </div>


        </div>


    </div>


</div>
<script>


    $(document).ready(function () {
        $("#continuar").click(function () {
            $("#myTab li:eq(1) a").tab("show");
        });

        $("#continuar2").click(function () {
            $("#myTab li:eq(2) a").tab("show");
        });

        $("#continuar3").click(function () {
            $("#myTab li:eq(3) a").tab("show");
        });
        $("#continuar4").click(function () {
            $("#myTab li:eq(4) a").tab("show");

            var idCasa = <?= $idCasa ?>;

            var nom1 = $("#nomCasa").val();
            var nom2 = $("#nomCasaAngles").val();
            var desc1 = $("#descripcio").val();
            var desc2 = $("#descripcioAngles").val();

            var hab = $("#hab").val();
            var banys = $("#banys").val();

            var caract = [];

            $("input[type=checkbox]:checked").each(function () {
                caract.push($(this).val());
            });

            var x = $("#x").val();
            var y = $("#y").val();
            var pob = $("#pob").val();


            var preu = $("#preuDefecte").val();

            var arrayC = JSON.stringify(caract);

            var xhttp = new XMLHttpRequest();

            xhttp.open("POST", "../API/casa/update_casa.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + idCasa + "&pob=" + pob + "&banys=" + banys + "&hab=" + hab + "&x=" + x + "&y=" + y + "&preu=" + preu + "&nom1=" + nom1 + "&nom2=" + nom2 + "&desc1=" + desc1 + "&desc2=" + desc2 + "&caract=" + arrayC);


            location.href = "gestioCasa.php?id=<?=$idCasa?>";
        });


        function carregar_nom() {

            var idCasa = <?= $idCasa ?>;

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var info = JSON.parse(this.responseText);


                    var nom1 = info[0].traduccioNom;
                    var nom2 = info[1].traduccioNom;
                    var desc1 = info[0].tradDescripcio;
                    var desc2 = info[1].tradDescripcio;


                    $("#nomCasa").val(nom1);
                    $("#nomCasaAngles").val(nom2);
                    $("#descripcio").val(desc1);
                    $("#descripcioAngles").val(desc2);

                }


            };

            xhttp.open("GET", "../API/casa/select_una_casa.php?id=" + idCasa, true);
            xhttp.send();


        }

        function carregar_caract() {
            var idCasa = <?= $idCasa ?>;

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var info = JSON.parse(this.responseText);

                    for (c in info) {
                        var idCaract = info[c].caracteristica_id;

                        $("input[type=checkbox]").each(function () {
                            if ($(this).val() == idCaract) {
                                $(this).prop('checked', true);
                            }
                        });
                    }

                }

            };

            xhttp.open("GET", "../API/casa/select_una_casa.php?codi=" + idCasa, true);
            xhttp.send();
        }

        function carregar_info() {

            var idCasa = <?= $idCasa ?>;

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var info = JSON.parse(this.responseText);


                    var nHab = info[0].nHabitacions;
                    var nBanys = info[0].nBanys;
                    var x = info[0].x;
                    var y = info[0].y;
                    var pob = info[0].nom;
                    var tarifa = info[0].tarifaDefault;


                    $("#hab option[value='" + nHab + "']").attr("selected", true);
                    $("#banys option[value='" + nBanys + "']").attr("selected", true);
                    $("#x").val(x);
                    $("#y").val(y);
                    myMap(x, y);
                    $("#pob").val(pob);
                    $("#preuDefecte").val(tarifa);


                }


            };

            xhttp.open("GET", "../API/casa/select_una_casa.php?idCasa=" + idCasa, true);
            xhttp.send();

        }

        function myMap(x, y) {

            var marker;

            var mapOptions = {
                center: new google.maps.LatLng(y, x),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,

            };

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(y, x),
                map: map,
                icon: '../imatges/icon.png',
            });



            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            marker.setMap(map);

            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(event.latLng);


            });

            function placeMarker(location) {

                if (!marker || !marker.setPosition) {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        icon: '../imatges/icon.png',
                    });

                    document.getElementById("x").value = location.lng();
                    document.getElementById("y").value = location.lat();
                } else {
                    marker.setPosition(location);
                    document.getElementById("x").value = location.lng();
                    document.getElementById("y").value = location.lat();
                }

            }

        }


        carregar_nom();
        carregar_caract();
        carregar_info();


    });


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=myMap"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>
</html>