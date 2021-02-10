<?php
if (isset($_GET['id'])) {
    $idCasa = $_GET['id'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Gestió Cases</title>

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
    <style>
        /*div principal del datepicker*/
        .ui-datepicker
        {
            width: auto;
            background: #F5F5F5;
        }

        /*Tabla con los días del mes*/
        .ui-datepicker table
        {
            font-size: 24px;
        }

        /*La cabecera*/
        .ui-datepicker .ui-datepicker-header
        {
            font-size: 24px;
            background: #FFFFFF;
        }

        /*Para los días de la semana: Sa Mo ... */
        .ui-datepicker th
        {
            color: #000000;
        }

        /*Para items con los días del mes por defecto */
        .ui-datepicker .ui-state-default
        {
            background: #FFFFFF;
        }

        /*Para el item del día del mes seleccionado */
        .ui-datepicker .ui-state-active
        {
            background: #FFFFFF;
            color: #967ADC;
            border-color: #967ADC;
        }

        .reservat a{
            background-color: #65CE6E !important;
        }
        .bloquetjat a{
            background-color: #9C9C9C !important;
        }
    </style>
</head>
<body>

<?php
include('header.php');
?>
<div id="c" class="container">
    <div class="row">
        <div class="list-group col-md-3">
            <a href="formEditar.php?id=<?=$idCasa?>" class="list-group-item list-group-item-action">Editar informació</a>
            <a href="formEditarFotos.php?id=<?=$idCasa?>" class="list-group-item list-group-item-action">Modificar imatges</a>
            <a href="gestioTarifa.php?id=<?=$idCasa?>" class="list-group-item list-group-item-action">Gestionar tarifes</a>
            <a href="gestioBloqueig.php?id=<?=$idCasa?>" class="list-group-item list-group-item-action">Gestionar bloqueig</a>
        </div>
        <div id="datepicker" class="col-md-9"></div>

    </div>

</div>

<script>


    $(document).ready(function() {

        window.cache = {
            mes: null,
            data: []
        };

        function updateInfo(anyMes) {

            if (window.cache.mes == anyMes)
                return window.cache.data;

            $.ajax({
                url: '../API/data/getArrayDies.php',
                method: 'POST',
                data: {
                    id: <?= $idCasa ?>,
                    anyMes: anyMes
                },
                async: false,
                success: (data, status) => {
                    window.cache.mes = anyMes;
                    window.cache.data = JSON.parse(data);
                }
            });

            return window.cache.data;
        }


        $('#datepicker').datepicker({
            firstDay: 1,
            minDate: 0,

            beforeShowDay: function (date) {

                var info = updateInfo(date.getFullYear() + '-' + (date.getMonth()+1))

                var diaActual = date.getDate() - 1;

                console.log(info[diaActual]);

                var preu = info[diaActual].preu + " €";

                if (info[diaActual].estat == "reservat") {
                    return [true, "reservat", preu];
                } else if (info[diaActual].estat == "bloquetjat") {
                    return [true, "bloquetjat", preu];
                } else {
                    return [true, "", preu];
                }



            }

        });





    });


</script>
</body>
</html>
