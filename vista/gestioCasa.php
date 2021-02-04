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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/_general.css"/>
    <title>gestioCases</title>
</head>
<body>
<?php
include('header.php');
?>
<div id="c" class="container">

        <div class="input-group row" data-provide="datepicker">

                <div class = "col-1 offset-3">
                    <label for="start">Data d'inici:</label>
                </div>
                <div class="col-4">
                    <input type="date" id="start" name="dataInici" class="form-control">
                </div>

        </div>
    <br/>
        <div class="input-group row" data-provide="datepicker">
                <div class = "col-1 offset-3">
                    <label for="finish">Data fi:</label>
                </div>
                <div class="col-4">
                    <input type="date" id="finish" name="dataFi" class="form-control">
                </div>

        </div>
    <br/>
        <div class="row">
            <div class="col-2 offset-5">
                <button id="bloquejar" type="button" class="btn">Bloqueja</button>
            </div>
        </div>
    <br/>

    <div class="row">
        <div class="col-3 offset-10">
            <a id="EditInfo" href="formEditar.php?id=<?=$idCasa?>" class="btn">Editar Informació</a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-3 offset-10">
            <a id="ModificarImg" href="formEditarFotos.php?id=<?=$idCasa?>" class="btn">Modificar Imatges</a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-3 offset-10">
            <a id="GestioTarifes" href="gestioTarifa.php?id=<?=$idCasa?>" class="btn">Editar Informació</a>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){

        $("#bloquejar").click(function(){

            var idCasa = <?= $idCasa ?>;
            var dataInici = $("#start").val();
            var dataFi = $("#finish").val();

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    var json = JSON.parse(this.responseText);

                    if(json.success == false){
                        alert("Les dates que has introduït estan ocupades. Prova unes altres.")
                    }

                }
            };


            xhttp.open("POST", "../API/casa/bloqueigCases.php"/*?idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi*/, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("idCasa="+idCasa+"&dataInici="+dataInici+"&dataFi="+dataFi);


        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
