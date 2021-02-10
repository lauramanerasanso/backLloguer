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
            <a class="nav-link active" id="dades-tab" data-toggle="tab" href="#img_principal" role="tab"
               aria-controls="img_principal"
               aria-selected="true">Imatge principal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="caract-tab" data-toggle="tab" href="#img_2" role="tab" aria-controls="img_2"
               aria-selected="false">Imatge 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ubi-tab" data-toggle="tab" href="#img_3" role="tab" aria-controls="img_3"
               aria-selected="false">Imatge 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tarifa-tab" data-toggle="tab" href="#img_4" role="tab" aria-controls="img_4"
               aria-selected="false">Imatge 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="imatge-tab" data-toggle="tab" href="#img_5" role="tab" aria-controls="img_5"
               aria-selected="false">Imatge 5</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="img_principal" role="tabpanel"
             aria-labelledby="img_principal-tab">
            <form method="post" id="myForm" action="../API/casa/update_fotos.php"
                  enctype="multipart/form-data">


                <div class="row" style="margin-top: 2%">

                    <div class="col-4 offset-3">
                        <div class="custom-file">

                            <input type="file" class="custom-file-input" data-target="file-uploader" id="file"
                                   name="file">
                            <label class="custom-file-label" for="customFile">Imatge principal</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-outline" id="img_prin">Modificar</a>
                    </div>
                </div>


                <br/>
                <div class="row">
                    <div class=" col-md-6 offset-3">
                        <img id="f1" alt="foto_principal" class="img-fluid">
                    </div>

                </div>


                <br/>
                <div class="d-flex">
                    <a class="btn col-md-2 ml-auto" id="continuar">Continuar</a>
                </div>
            </form>
        </div>


        <div class="tab-pane fade" id="img_2" role="tabpanel" aria-labelledby="img_2-tab">
            <form method="post" id="myForm" action="../API/casa/update_fotos.php"
                  enctype="multipart/form-data">

                <div class="row" style="margin-top: 2%">
                    <div class="col-4 offset-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" data-target="file-uploader" id="f2"
                                   name="f2">
                            <label class="custom-file-label" for="customFile">Imatge 2</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-outline" id="img2">Modificar</a>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <img id="foto2" alt="foto_2" class="img-fluid">
                    </div>

                </div>

                <br/>
                <div class="d-flex">
                    <a class="btn col-md-2 ml-auto" id="continuar2">Continuar</a>
                </div>
            </form>

        </div>
        <div class="tab-pane fade" id="img_3" role="tabpanel" aria-labelledby="img_3-tab">
            <form method="post" id="myForm" action="../API/casa/update_fotos.php"
                  enctype="multipart/form-data">

                <div class="row" style="margin-top: 2%">
                    <div class="col-4 offset-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" data-target="file-uploader" id="f3"
                                   name="f3">
                            <label class="custom-file-label" for="customFile">Imatge 3</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <a type="button" class="btn btn-outline" id="img3">Modificar</a>
                    </div>

                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <img id="foto3" alt="foto_3" class="img-fluid">
                    </div>

                </div>

                <br/>
                <div class="d-flex">
                    <a class="btn col-md-2 ml-auto" id="continuar3">Continuar</a>
                </div>
            </form>

        </div>
        <div class="tab-pane fade" id="img_4" role="tabpanel" aria-labelledby="img_4-tab">
            <form method="post" id="myForm" action="../API/casa/update_fotos.php"
                  enctype="multipart/form-data">


                <div class="row" style="margin-top: 2%">
                    <div class="col-md-4 offset-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" data-target="file-uploader" id="f4"
                                   name="f4">
                            <label class="custom-file-label" for="customFile">Imatge 4</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <a type="button" class="btn btn-outline" id="img4">Modificar</a>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <img id="foto4" alt="foto_4" class="img-fluid">
                    </div>

                </div>

                <br/>
                <div class="d-flex">
                    <a class="btn col-md-2 ml-auto" id="continuar4">Continuar</a>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="img_5" role="tabpanel" aria-labelledby="img_5-tab">

            <form method="post" id="myForm" action="../API/casa/update_fotos.php"
                  enctype="multipart/form-data">
                <div class="row" style="margin-top: 2%">
                    <div class="col-md-4 offset-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" data-target="file-uploader" id="f5"
                                   name="f5">
                            <label class="custom-file-label" for="customFile">Imatge 5</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <a type="button" class="btn btn-outline" id="img5">Modificar</a>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <img id="foto5" alt="foto_5" class="img-fluid">
                    </div>

                </div>

                <br/>
                <div class="d-flex">
                    <a href="gestioCasa.php?id=<?=$idCasa?>" class="btn col-md-2 ml-auto" id="continuar5">Sortir</a>
                </div>
            </form>

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
            });

            $(".custom-file-input").on("change", function () {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });

            function carregar_info() {

                var idCasa = <?= $idCasa ?>;


                $("#f1").attr("src", "../imatges/" + idCasa + "_1.jpg");
                $("#foto2").attr("src", "../imatges/" + idCasa + "_2.jpg");
                $("#foto3").attr("src", "../imatges/" + idCasa + "_3.jpg");
                $("#foto4").attr("src", "../imatges/" + idCasa + "_4.jpg");
                $("#foto5").attr("src", "../imatges/" + idCasa + "_5.jpg");


            }


            carregar_info();

            $("#img_prin").click(function () {

                var formData = new FormData();
                var foto = $('#file')[0].files[0];

                formData.append('file', foto);


                $.ajax({
                    url: '../API/casa/update_fotos.php?idCasa=<?= $idCasa ?>&idImg=1',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response != 0) {

                            $("#f1").attr("src", response+"?"+new Date().getTime());

                        } else {
                            alert('No has penjat cap imatge.');
                        }
                    },
                });

            });

            $("#img2").click(function () {

                var formData = new FormData();
                var foto = $('#f2')[0].files[0];

                formData.append('file', foto);

                $.ajax({
                    url: '../API/casa/update_fotos.php?idCasa=<?= $idCasa ?>&idImg=2',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response != 0) {
                            $("#foto2").attr("src", response+"?"+new Date().getTime());

                        } else {
                            alert('No has penjat cap imatge.');
                        }
                    },
                });


            });

            $("#img3").click(function () {

                var formData = new FormData();
                var foto = $('#f3')[0].files[0];

                formData.append('file', foto);


                $.ajax({
                    url: '../API/casa/update_fotos.php?idCasa=<?= $idCasa ?>&idImg=3',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response != 0) {
                            $("#foto3").attr("src", response+"?"+new Date().getTime());

                        } else {
                            alert('No has penjat cap imatge.');
                        }
                    },
                });

            });
            $("#img4").click(function () {

                var formData = new FormData();
                var foto = $('#f4')[0].files[0];

                formData.append('file', foto);


                $.ajax({
                    url: '../API/casa/update_fotos.php?idCasa=<?= $idCasa ?>&idImg=4',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response != 0) {
                            $("#foto4").attr("src", response+"?"+new Date().getTime());

                        } else {
                            alert('No has penjat cap imatge.');
                        }
                    },
                });

            });

            $("#img5").click(function () {

                var formData = new FormData();
                var foto = $('#f5')[0].files[0];

                formData.append('file', foto);

                $.ajax({
                    url: '../API/casa/update_fotos.php?idCasa=<?= $idCasa ?>&idImg=5',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response != 0) {
                            $("#foto5").attr("src", response+"?"+new Date().getTime());

                        } else {
                            alert('No has penjat cap imatge.');
                        }
                    },
                });


            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

</body>
</html>
