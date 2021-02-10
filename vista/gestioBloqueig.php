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
    <title>Gestió Bloqueig</title>

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
        <button type="button" class="btn" id="btnModalAfegir"> <i class="fas fa-plus"></i>  Bloqueja noves dates </button>

        <div class="modal fade" id="modalAfegir">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Afegir bloqueig</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="AfegeixBloq" class="col-md">
                            <div class = "row">
                                <label for="startBloq" class="form-label col-4">Data d'inici:</label>
                                <input type="date" id="startBloq" name="startBloq" class="form-control col-8">
                            </div>
                            <br>
                            <div class="row">
                                <label for="finishBloq" class="form-label col-4">Data fi:</label>
                                <input type="date" id="finishBloq" name="finishBloq" class="form-control col-8">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                        <button id="bloquejar" type="button" class="btn" data-dismiss="modal">Bloqueja</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div id="taulaBloqueig">
            <table id="bloqueigTable" class="table table-striped">
            </table>
        </div>

        <div class="modal fade" id="modalEditar">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Edita el bloqueig</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">

                        <div id="EditaDiv" class="col-md">
                            <input type="date" id="iniciAmagat" name="iniciAmagat" hidden>
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
                        <button id="editaBloq" type="button" class="btn" data-dismiss="modal">Edita</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEliminar">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Vols eliminar aquest bloqueig?</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        Segur que vols desbloquejar aquestes dates?
                        <input type="date" id="delDataB" name="delDataT" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Cancel·la</button>
                        <button type="button" class="btn" id="eliminaBloq" data-dismiss="modal" >Elimina</button>
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
                        <p>Les dates que has introduït estan ocupades. Prova unes altres.</p>
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

    function editarBloq(iniciBloq, fiBloq) {
        $("#iniciAmagat").val(iniciBloq);
        $("#editInici").val(iniciBloq);

        $("#editFi").val(fiBloq);
    }

    function eliminarBloq(iniciBloq) {
        $("#delDataB").val(iniciBloq);
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

        $("#startBloq").change(function (){
            var inici = $("#startBloq").val();
            $("#finishBloq").attr("min", inici);
        });

        $("#editInici").change(function (){
            var inici = $("#editInici").val();
            $("#editFi").attr("min", inici);
        });

        var info=[];


        $("#bloquejar").click(function(){

            var dataInici = $("#startBloq").val();
            var dataFi = $("#finishBloq").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    var json = JSON.parse(this.responseText);

                    if(json.success == false){
                        $("#error").modal();
                    }else{
                        $("#bloqueigTable").empty();
                        carregarTaula();
                    }

                }
            };

            xhttp.open("POST", "../API/casa/bloqueigCases.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa="+window.cache.idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi);


        });

        function carregarTaula(){
            var thead = $("<thead/>");
            var tr = $("<tr/>");

            var th = $("<th/>", {scope:'col', text:"Data Inici"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Data Fi"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Edita"});
            tr.append(th);

            var th = $("<th/>", {scope:'col', text:"Elimina"});
            tr.append(th);

            thead.append(tr);
            $("#bloqueigTable").append(thead);

            var tbody = $("<tbody/>");

            $.ajax({
                url: '../API/casa/selectBloqueig.php', //select bloq
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa
                },
                async: false,
                success: (data, status) => {
                    console.log(JSON.parse(data));
                    window.cache.data = JSON.parse(data);
                    var bloq = JSON.parse(data)

                    for (b in bloq) {

                        var iniciBloq = bloq[b].data_inici;
                        var fiBloq = bloq[b].data_fi;

                        var nouTR = $("<tr/>");

                        var nouTD = $("<td/>",{text:iniciBloq});
                        nouTR.append(nouTD);

                        nouTD = $("<td/>",{text:fiBloq});
                        nouTR.append(nouTD);

                        var botoEditar = "<button class='btn btnEditar' data-index='"+b+"' data-target='#modalEditar'> <i class=\"far fa-edit\"></i> </button>"
                        botoEditar = $(botoEditar);
                        botoEditar.on("click", function(){
                            var index = $(this).attr('data-index');
                            var json = window.cache.data[index];
                            editarBloq(json.data_inici, json.data_fi);
                        });
                        nouTD = $("<td/>");
                        nouTD.append(botoEditar);
                        nouTR.append(nouTD);

                        var botoEliminar = "<button class='btn btnEliminar' data-index='"+b+"'> <i class=\"far fa-trash-alt\"></i> </button>"
                        botoEliminar = $(botoEliminar);
                        botoEliminar.on("click", function(){
                            var index = $(this).attr('data-index');
                            var json = window.cache.data[index];
                            eliminarBloq(json.data_inici);
                        });
                        nouTD = $("<td/>");
                        nouTD.append(botoEliminar);
                        nouTR.append(nouTD);

                        tbody.append(nouTR);
                        $("#bloqueigTable").append(tbody);
                    }
                }
            });
        };

        carregarTaula();

        $(".btnEditar").click(function(){
            $("#modalEditar").modal();
        });

        $(".btnEliminar").click(function(){
            $("#modalEliminar").modal('show');
        });

        $("#editaBloq").click(function(){

            var inici = $("#iniciAmagat").val();
            var nouInici = $("#editInici").val();

            var nouFi = $("#editFi").val();

            $.ajax({
                url: '../API/casa/updateBloqueig.php',
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa,
                    dataInici: inici,
                    dataIniciNew: nouInici,
                    dataFiNew: nouFi
                },
                async: true,
                success: function (data){
                    var err = JSON.parse(data);
                    if (err['success']){
                        $("#bloqueigTable").empty();
                        carregarTaula();
                    }
                }
            });
        });

        $("#eliminaBloq").click(function(){
            var inici = $("#delDataB").val();

            $.ajax({
                url: '../API/casa/deleteBloqueig.php',
                method: 'POST',
                data: {
                    idCasa: window.cache.idCasa,
                    dataInici: inici
                },
                async: true,
                success: (data, status) => {
                    var err = JSON.parse(data);
                    if (err['success']){
                        $("#bloqueigTable").empty();
                        carregarTaula();
                    }
                }
            });
        });
    });
</script>



</body>
</html>