<?php
include_once '../php/controlAcces.php';
?>

<!DOCTYPE html >
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/css/_general.css"/>
</head>

<body>

<?php include('header.php')?>
<div class="container" id="c">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dades-tab" data-toggle="tab" href="#dades" role="tab" aria-controls="dades" aria-selected="true">Dades Generals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="caract-tab" data-toggle="tab" href="#caract" role="tab" aria-controls="caract" aria-selected="false">Característiques</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ubi-tab" data-toggle="tab" href="#ubi" role="tab" aria-controls="ubi" aria-selected="false">Ubicació</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tarifa-tab" data-toggle="tab" href="#tarifa" role="tab" aria-controls="tarifa" aria-selected="false">Tarifes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="imatge-tab" data-toggle="tab" href="#imatges" role="tab" aria-controls="imatges" aria-selected="false">Imatges</a>
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
                    <div class="form group col-6">

                        <label class="control-label" for="desc1">Descripció</label>

                        <textarea class="form-control col-10" id="descripcio" rows="5"></textarea>
                    </div>
                    <div class="form group col-6">

                        <label class="control-label" for="inlineFormCustomSelect">Description</label>

                        <textarea class="form-control col-10" id="descripcioAngles" rows="5"></textarea>
                    </div>



                </div>
                <br/>
                <button class="btn col-2 offset-10" id="continuar">Continuar </button>

            </div>



        </div>



        <div class="tab-pane fade" id="caract" role="tabpanel" aria-labelledby="caract-tab">
            <div class="container con">
                <h4 style="margin-top: 2%;">Característiques :</h4>
                <fieldset>
                    <legend id="leg1">Distribució</legend>
                    <div class="row">

                        <label class="control-label col-2 offset-1" for="inlineFormCustomSelect">Num Habitacions</label>
                        <div class="col-1">
                            <select class="custom-select" id="hab">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>


                        <label class="control-label col-2 offset-2" for="inlineFormCustomSelect">Num Banys</label>
                        <div class="col-1">
                            <select class="custom-select" id="banys">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>
                    </div>



                </fieldset>

                <fieldset>
                    <legend id="leg2">Serveis</legend>
                    <div class="row">

                        <div class="form-group col-4">
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

                        <div class="form-group col-4">
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

                        <div class="form-group col-4">
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
            <button class="btn col-2 offset-10" id="continuar2">Continuar </button>


        </div>

        <div class="tab-pane fade" id="ubi" role="tabpanel" aria-labelledby="ubi-tab">
            <div class="container">
                <h4 style="margin-top: 2%;">Coordenades :</h4>
                <div class="row" style="margin-top: 2%;">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">X</label>
                    <input type="text" class="form-control col-4" id="x">

                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Y</label>
                    <input type="text" class="form-control col-4" id="y">

                </div>
                <div class="row">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Població</label>
                    <input type="text" class="form-control col-4" id="pob">

                </div>

                <br/>
                <button class="btn col-2 offset-10" id="continuar3">Continuar </button>

            </div>
        </div>
        <div class="tab-pane fade" id="tarifa" role="tabpanel" aria-labelledby="imatges-tab">
            <div class="container">
                <h4 style="margin-top: 2%;">Tarifa:</h4>
                <div class="row" style="margin-top: 2%;">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Preu Defecte</label>
                    <input type="text" class="form-control col-4" id="preuDefecte">

                </div>


            </div>

            <br/>
            <button class="btn col-2 offset-10" id="continuar4">Continuar </button>


        </div>
        <div class="tab-pane fade" id="imatges" role="tabpanel" aria-labelledby="imatges-tab">
            <div class="container">
                <form method="post" id="myForm" action="../controlador/API/casa/insert_fotos.php" enctype="multipart/form-data">
                <h4 style="margin-top: 2%;">Imatges :</h4>
                <div class="row" style="margin-top: 2%;">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Foto principal</label>
                    <input type="file" class="form-control col-4" id="file" name="file">


                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Foto 2</label>
                    <input type="file" class="form-control col-4" id="f2" name="f2">
                </div>
                <div class="row">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Foto 3</label>
                    <input type="file" class="form-control col-4" id="f3" name="f3">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Foto 4</label>
                    <input type="file" class="form-control col-4" id="f4" name="f4">
                </div>
                <br/>
                <div class="row">
                    <label class="control-label col-md-1" for="inlineFormCustomSelect">Foto 5</label>
                    <input type="file" class="form-control col-4" id="f5" name="f5">
                </div>
                    <button type="submit" class="btn col-2offset-10" id="insertar">Insertar </button>
                </form>
            </div>

            <br/>


        </div>

    </div>


</div>


</div>
<script>
    $(document).ready(function() {
        $("#continuar").click(function() {
            $("#myTab li:eq(1) a").tab("show");
        });

        $("#continuar2").click(function() {
            $("#myTab li:eq(2) a").tab("show");
        });

        $("#continuar3").click(function() {
            $("#myTab li:eq(3) a").tab("show");
        });
        $("#continuar4").click(function() {
            $("#myTab li:eq(4) a").tab("show");

            var nom1 = $("#nomCasa").val();
            var nom2 = $("#nomCasaAngles").val();
            var desc1 = $("#descripcio").val();
            var desc2 = $("#descripcioAngles").val();
            var hab = $("#hab").val();
            var banys = $("#banys").val();

            var caract = [];

            $("input[type=checkbox]:checked").each(function(){
                caract.push($(this).val());
            });


            var x = $("#x").val();
            var y = $("#y").val();
            var pob = $("#pob").val();


            var preu = $("#preuDefecte").val();

            var arrayC = JSON.stringify(caract);




            var xhttp = new XMLHttpRequest();

            xhttp.open("POST", "../controlador/API/casa/insert.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("pob="+pob+"&banys="+banys+"&hab=" + hab + "&x=" + x + "&y=" + y + "&preu=" + preu +  "&nom1=" + nom1 +"&nom2=" + nom2 + "&desc1=" + desc1 + "&desc2=" + desc2 + "&caract=" +arrayC );

           /* $.ajax({
                url: '../Controladors/API/casa/insert.php',
                type: 'POST',
                dataSrc: '',
                data: {
                    "pob" : pob,
                    "banys" : banys,
                    "hab" : hab,
                    "x" : x,
                    "y" : y,
                    "preu": preu,
                    "nom1" : nom1,
                    "nom2" : nom2,
                    "desc1" : desc1,
                    "caract" : caract,
                }
            });*/

        });
        $("#insertar").click(function() {


            var formData = new FormData();
            var f1 = $('#file')[0].files[0];
            var f2 = $("#f2")[0].files[1]
            var f3 = $("#f3")[0].files[2]
            var f4 = $("#f4")[0].files[3]
            var f5 = $("#f5")[0].files[4]

            formData.append('file' + "1",f1);
            formData.append('file' + "2",f2);
            formData.append('file' + "3",f3);
            formData.append('file' + "4",f4);
            formData.append('file' + "5",f5);


            /*var img_principal = $("#file").val();
            var img_2 = $("#f2").val();
            var img_3 = $("#f3").val();
            var img_4 = $("#f4").val();
            var img_5 = $("#f5").val();*/

           /* if(files.length > 0 ) {
                formData.append('file', files[0]);
            }

            $.ajax({
                url: '../Controladors/API/casa/insert_fotos.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        $("#img").attr("src",response);
                        $(".preview img").show(); // Display image element
                    }else{
                        alert('file not uploaded');
                    }
                },
            });*/


            $.post($("#myForm").attr("action"), formData, function(data) {
                alert(data);
            });

        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>