<?php
if (isset($_GET['id'])) {
    $idCasa = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/_general.css"/>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css "
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/css/_general.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js "
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <title>gestioTarifes</title>
</head>
<body>
<?php
include('header.php');
?>
<div id="c" class="container">
    <div class="row">
        <div id="AfegeixDiv" class="col-md-6">
                <fieldset>
                <legend>Afegir tarifa:</legend>
                <div class="col-md-12">
                    <label for="inputNomTarifa" class="form-label">Nom Tarifa</label>
                    <input type="text" class="form-control" id="inputNomTarifa">
                </div>
                <div class="col-md-12">
                    <label for="inputPreuTarifa" class="form-label">Preu Tarifa</label>
                    <input type="text" class="form-control" id="inputPreuTarifa">
                </div>
                <div class = "col-md-12">
                    <label for="start">Data d'inici:</label>
                    <input type="date" id="startaf" name="dataInici" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="finish">Data fi:</label>
                    <input type="date" id="finishaf" name="dataFi" class="form-control">
                </div>
                    <br/>
                <div class="col-2 offset-5">
                    <button id="afegeix" type="button" class="btn">Afegeix</button>
                </div>
                </fieldset>
        </div>
        <div id="AplicarDiv" class="col-md-6">

                <fieldset>
                <legend>Aplicar tarifa:</legend>
                <div id="selectTarifes" class="col-md row">
                    <label for="inputNomTarifa2" class="form-label col">Tarifa: </label>
                        <select class="form-select form-control col-8" id="s1" aria-label=".form-select-sm example">
                        <option selected> Tria una tarifa </option>
                        </select>
                </div>
                <div class = "col-md">
                    <label for="start">Data d'inici:</label>
                    <input type="date" id="start" name="dataInici" class="form-control">
                </div>
                <div class="col-md">
                    <label for="finish">Data fi:</label>
                    <input type="date" id="finish" name="dataFi" class="form-control">
                </div>
                    <br/>
                <div class="col-2 offset-5">
                    <button id="aplica" type="button" class="btn">Aplica</button>
                </div>
                </fieldset>

        </div>
    </div>
</div>

<script>

    $(document).ready(function() {

        var info=[];

        function carregarTarifes() {
            $("#s1").empty();
            var idCasa = <?= $idCasa ?>;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    var tarifes = JSON.parse(this.responseText);
                    for (tf in tarifes) {

                        var nom = tarifes[tf].nom_tarifa;
                        var preu = tarifes[tf].preu_tarifa;

                        var seltarifa = $("<option/>", {value: preu, text: nom + ": " + preu + "€"});
                        $("#s1").append(seltarifa);

                        info.push({nom : tarifes[tf].nom_tarifa, preu : tarifes[tf].preu_tarifa});

                    }
                }
            };
            xhttp.open("POST", "../controlador/API/casa/aplicarTarifa.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + idCasa);
        }

        carregarTarifes();


        $("#afegeix").click(function () {
            carregarTarifes();
            var idCasa = <?= $idCasa ?>;
            var preuTarifa = $("#inputPreuTarifa").val();
            var dataInici = $("#startaf").val();
            var dataFi = $("#finishaf").val();
            var nomTarifa = $("#inputNomTarifa").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {

            };

            xhttp.open("POST", "../controlador/API/casa/afegirTarifa.php"/*?idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi*/, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + idCasa + "&preuTarifa=" + preuTarifa + "&dataInici=" + dataInici + "&dataFi=" + dataFi + "&nomTarifa=" + nomTarifa);

        });

        $("#aplica").click(function () {

            var dataInici = $("#start").val();
            var dataFi = $("#finish").val();
            var preuTarifa = $("#s1").val();

console.log(preuTarifa);
            var idCasa = <?= $idCasa ?>;
            var nomTarifa;


            for(i  = 0; i < info.length; i++){
                if(info[i].preu == preuTarifa ){
                    nomTarifa = info[i].nom;

                }
            }



            var xhttp = new XMLHttpRequest();

                xhttp.open("POST", "../controlador/API/casa/afegirTarifa.php"/*?idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi*/, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("idCasa=" + idCasa + "&preuTarifa=" + preuTarifa + "&dataInici=" + dataInici + "&dataFi=" + dataFi + "&nomTarifa=" + nomTarifa);

        });
    });
</script>



</body>
</html>
