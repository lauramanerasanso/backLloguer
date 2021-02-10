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
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="../style/css/_general.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"   integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="   crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <title>Gestió Tarifes</title>

</head>
<body>
<?php
include('header.php');
?>
<div class="container-fluid">
    <div class="d-flex">
        <a href="gestioCasa.php?id=<?=$idCasa?>" class="btn mr-auto"><i class="fas fa-arrow-left"></i> Torna</a>
    </div>
</div>
<div id="c" class="container mt-3">
    <div>
        <button type="button" class="btn" id="btnModalAfegir"> <i class="fas fa-plus"></i>  Afegir una nova tarifa </button>

        <div class="modal fade" id="modalAfegir">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Afegir tarifa</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="AfegeixDiv" class="col-md">
                            <div class="row">
                                <label for="inputNomTarifa" class="form-label col-4">Nom tarifa:</label>
                                <input type="text" class="form-control col-8" id="inputNomTarifa">
                            </div>
                            <br>
                            <div class="row">
                                <label for="inputPreuTarifa" class="form-label col-4">Preu tarifa:</label>
                                <input type="text" class="form-control col-8" id="inputPreuTarifa">
                            </div>
                            <br>
                            <div class = "row">
                                <label for="startaf" class="form-label col-4">Data d'inici:</label>
                                <input type="date" id="startaf" name="startaf" class="form-control col-8">
                            </div>
                            <br>
                            <div class="row">
                                <label for="finishaf" class="form-label col-4">Data fi:</label>
                                <input type="date" id="finishaf" name="finishaf" class="form-control col-8">
                            </div>
                            <br/>
                            <div class="col-2 mx-auto">
                                <button id="afegeix" type="button" class="btn" data-dismiss="modal">Afegeix</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn" id="btnModalAfegirDates"><i class="far fa-calendar-plus">  Afegir noves dates a una tarifa </i></button>

        <div class="modal fade" id="modalAfegirDates">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Afegir tarifa</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="AplicarDiv" class="col">

                                <div id="selectTarifes" class="row">
                                    <label for="inputNomTarifa2" class="form-label col-4">Tarifa: </label>
                                    <select class="form-select form-control col-8" id="s1" aria-label=".form-select-sm example">
                                        <option selected> Tria una tarifa </option>
                                    </select>
                                </div>
                            <br>
                                <div class = "row">
                                    <label for="start" class="form-label col-4">Data d'inici:</label>
                                    <input type="date" id="start" name="start" class="form-control col-8">
                                </div>
                                <br>
                                <div class="row">
                                    <label for="finish" class="form-label col-4">Data fi:</label>
                                    <input type="date" id="finish" name="finish" class="form-control col-8">
                                </div>
                                <br/>
                                <div class="col-2 mx-auto">
                                    <button id="aplica" type="button" class="btn" data-dismiss="modal">Aplica</button>
                                </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="taulaTarifes">
            <table id="tarifesTable" class="table table-striped">
            </table>
        </div>

        <div class="modal fade" id="modalEditar">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Edita la tarifa</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="EditaDiv" class="col-md">

                            <input type="text" id="nomAmagat" name="nomAmagat" hidden>
                            <input type="text" id="preuAmagat" name="preuAmagat" hidden>
                            <input type="date" id="iniciAmagat" name="iniciAmagat" hidden>
                            <input type="date" id="fiAmagat" name="fiAmagat" hidden>
                            <div class="row">
                                <label for="editNom" class="form-label col-4">Nom tarifa:</label>
                                <input type="text" class="form-control col-8" id="editNom" name="editNom">
                            </div>
                            <br>
                            <div class="row">
                                <label for="editPreu" class="form-label col-4">Preu tarifa:</label>
                                <input type="text" class="form-control col-8" id="editPreu" name="editPreu">
                            </div>
                            <br>
                            <div class = "row">
                                <label for="editInici" class="form-label col-4">Data d'inici:</label>
                                <input type="date" id="editInici" name="editInici" class="form-control col-8">
                            </div>
                            <br>
                            <div class="row">
                                <label for="editFi" class="form-label col-4">Data fi:</label>
                                <input type="date" id="editFi" name="editFi" class="form-control col-8">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                        <button id="editaTarifa" type="button" class="btn" data-dismiss="modal">Edita</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEliminar">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Vols eliminar aquesta tarifa?</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        Segur que vols eliminar aquesta tarifa en aquestes dates?
                        <input type="text" id="delNomT" name="delNomT" hidden>
                        <input type="text" id="delPreuT" name="delPreuT" hidden>
                        <input type="date" id="delDataT" name="delDataT" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                        <button type="button" class="btn" id="eliminaTarifa" data-dismiss="modal" >Elimina</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="error">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Les dates introduïdes ja tenen una tarifa aplicada, fes les modificacions necessàries o tria unes altres dates.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

    function editarTarifa(nomTarifa, preuTarifa, iniciTarifa, fiTarifa) {

        $("#nomAmagat").val(nomTarifa);
        $("#editNom").val(nomTarifa);

        $("#preuAmagat").val(preuTarifa);
        $("#editPreu").val(preuTarifa);

        $("#iniciAmagat").val(iniciTarifa);
        $("#editInici").val(iniciTarifa);

        $("#fiAmagat").val(fiTarifa);
        $("#editFi").val(fiTarifa);

    }

    function eliminarTarifa(nomTarifa, preuTarifa, iniciTarifa) {

        $("#delNomT").val(nomTarifa);

        $("#delPreuT").val(preuTarifa);

        $("#delDataT").val(iniciTarifa);
    }

    $(document).ready(function() {

        window.cache = {
            idCasa: <?= $idCasa ?>,
            data: null,
            errorDates: null

        };

        $("#btnModalAfegir").click(function(){

            $("#modalAfegir").modal();
        });

        $("#btnModalAfegirDates").click(function(){

            $("#modalAfegirDates").modal();
        });

        var info=[];

        $("#startaf").change(function (){
            var inici = $("#startaf").val();
            $("#finishaf").attr("min", inici);
        });

        $("#start").change(function (){
            var inici = $("#start").val();
            $("#finish").attr("min", inici);
        });

        $("#editInici").change(function (){
            var inici = $("#editInici").val();
            $("#editFi").attr("min", inici);
        });

        function carregarTarifes() {
            $("#s1").empty();

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
            xhttp.open("POST", "../API/casa/aplicarTarifa.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + window.cache.idCasa);
        }

        carregarTarifes();


        $("#afegeix").click(function () {
            carregarTarifes();

            var preuTarifa = $("#inputPreuTarifa").val();
            var dataInici = $("#startaf").val();
            var dataFi = $("#finishaf").val();
            var nomTarifa = $("#inputNomTarifa").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var err = JSON.parse(this.responseText);
                    if (!err['success']){
                        $("#error").modal();
                    }else{
                        $("#tarifesTable").empty();
                        carregarTaula();
                    }
                }
            };

            xhttp.open("POST", "../API/casa/afegirTarifa.php"/*?idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi*/, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + window.cache.idCasa + "&preuTarifa=" + preuTarifa + "&dataInici=" + dataInici + "&dataFi=" + dataFi + "&nomTarifa=" + nomTarifa);

            $("#inputPreuTarifa").val("");
            $("#startaf").val("");
            $("#finishaf").val("");
            $("#inputNomTarifa").val("");
        });

        $("#aplica").click(function () {

            var dataInici = $("#start").val();
            var dataFi = $("#finish").val();
            var preuTarifa = $("#s1").val();

            var nomTarifa;

            for(i  = 0; i < info.length; i++){
                if(info[i].preu == preuTarifa ){
                    nomTarifa = info[i].nom;
                }
            }
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    var err = JSON.parse(this.responseText);
                    if (!err['success']){
                        $("#error").modal();
                    }else{
                        $("#tarifesTable").empty();
                        carregarTaula();
                    }

                }
            };
            xhttp.open("POST", "../API/casa/afegirTarifa.php"/*?idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi*/, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa=" + window.cache.idCasa + "&preuTarifa=" + preuTarifa + "&dataInici=" + dataInici + "&dataFi=" + dataFi + "&nomTarifa=" + nomTarifa);

            $("#start").val("");
            $("#finish").val("");
        });


        function carregarTaula(){
            var thead = $("<thead/>");
            var tr = $("<tr/>");
            var th = $("<th/>", {scope:'col', text:"Nom"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Preu"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Data Inici"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Data Fi"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Edita"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Elimina"});
            tr.append(th);

            thead.append(tr);
            $("#tarifesTable").append(thead);

            var tbody = $("<tbody/>");

            $.ajax({
                url: '../API/casa/selectTarifes.php',
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa
                },
                async: false,
                success: (data, status) => {
                    console.log(JSON.parse(data));
                    window.cache.data = JSON.parse(data);
                    var tarifes = JSON.parse(data)

                    for (t in tarifes) {

                        var nomTarifa = tarifes[t].nom_tarifa;
                        var preuTarifa = tarifes[t].preu_tarifa;
                        var iniciTarifa = tarifes[t].data_inici;
                        var fiTarifa = tarifes[t].data_fi;

                        var nouTR = $("<tr/>");

                        var nouTH = $("<td/>", {scope:'row', text:nomTarifa});
                        nouTR.append(nouTH);

                        var nouTD = $("<td/>",{text:preuTarifa + " €"});
                        nouTR.append(nouTD);

                        nouTD = $("<td/>",{text:iniciTarifa});
                        nouTR.append(nouTD);

                        nouTD = $("<td/>",{text:fiTarifa});
                        nouTR.append(nouTD);

                        var botoEditar = "<button class='btn btnEditar' data-index='"+t+"' data-target='#modalEditar'> <i class=\"far fa-edit\"></i> </button>"
                        botoEditar = $(botoEditar);
                        botoEditar.on("click", function(){
                            var index = $(this).attr('data-index');
                            var json = window.cache.data[index];
                            editarTarifa(json.nom_tarifa, json.preu_tarifa, json.data_inici, json.data_fi);
                        });
                        nouTD = $("<td/>");
                        nouTD.append(botoEditar);
                        nouTR.append(nouTD);

                        var botoEliminar = "<button class='btn btnEliminar' data-index='"+t+"'> <i class=\"far fa-trash-alt\"></i> </button>"
                        botoEliminar = $(botoEliminar);
                        botoEliminar.on("click", function(){
                            var index = $(this).attr('data-index');
                            var json = window.cache.data[index];
                            eliminarTarifa(json.nom_tarifa, json.preu_tarifa, json.data_inici);
                        });
                        nouTD = $("<td/>");
                        nouTD.append(botoEliminar);
                        nouTR.append(nouTD);

                        tbody.append(nouTR);
                        $("#tarifesTable").append(tbody);
                    }
                }
            });
        };

        carregarTaula();

        $(".btnEditar").click(function(){
            $("#modalEditar").modal();
        });

        $(".btnEliminar").click(function(){
            $("#modalEliminar").modal();
        });

        $("#editaTarifa").click(function(){
            var nom = $("#nomAmagat").val();
            var nouNom = $("#editNom").val();

            var preu = $("#preuAmagat").val();
            var nouPreu = $("#editPreu").val();

            var inici = $("#iniciAmagat").val();
            var nouInici = $("#editInici").val();

            var fi = $("#fiAmagat").val();
            var nouFi = $("#editFi").val();

            $.ajax({
                url: '../API/casa/updateAplicacioTarifa.php',
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa,
                    dataInici: inici,
                    dataIniciNew: nouInici,
                    dataFi: fi,
                    dataFiNew: nouFi,
                    nomTarifa: nom,
                    nomNew: nouNom,
                    preuNew: nouPreu
                },
                async: true,
                success: function (data){
                    var err = JSON.parse(data);
                    if (!err['success']){
                        $("#error").modal();
                    }else {
                        $("#tarifesTable").empty();
                        carregarTaula();
                    }
                }
            });
            $("#modalEditar").modal('hide');
        });

        $("#eliminaTarifa").click(function(){
            var nom = $("#delNomT").val();
            var inici = $("#delDataT").val();

            $.ajax({
                url: '../API/casa/deleteTarifa.php',
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa,
                    dataInici: inici,
                    nomTarifa: nom
                },
                async: true,
                success: (data, status) => {}
            });

            $("#tarifesTable").empty();
            carregarTaula();
        });
    });
</script>



</body>
</html>
