<?php
include_once '../php/controlAcces.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Cases</title>
    <style>

    header{
        background-color: white
    }
    #cardsCases{
        margin-top: 5%;
    }
    body{
        background-color: whitesmoke;
    }
    body header nav ul li .nav-link {
        padding-right: 25px !important;
        font-family: "Bungee", cursive;
        color: black;
        font-size: 20px;
    }
    </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
    <div id="cardsCases" class="container">

    </div>
</body>
<script>
    $(document).ready(function(){

        function carregarCases(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    var cases = JSON.parse(this.responseText);
                    for(cs in cases) {
                        var rowDiv = $("<div/>", {class: "row",});
                        $("#cardsCases").append(rowDiv);

                        var id = cases[cs].id;
                        var nom = cases[cs].traduccioNom;
                        var desc = cases[cs].tradDescripcio;
                        var foto = "../imatges/"+cases[cs].img_principal;

                        var cardDiv = $("<div/>", {class: "card mb-3"});
                        var cardRow = $("<div/>", {class: "row g-0"});
                        var cardCol1 = $("<div/>", {class: "col-md-4"});
                        var cardImg = $("<img/>", {src: foto,class:"card-img"});

                        cardCol1.append(cardImg);

                        var cardCol2 = $("<div/>", {class: "col-md-8"});
                        var cardBody = $("<div/>", {class: "card-body"});
                        var cardH5 = $("<h5/>", {class: "card-title", text: nom});
                        var cardP = $("<p/>", {class: "card-text", text: desc});

                        cardBody.append(cardH5, cardP);
                        cardCol2.append(cardBody);
                        cardRow.append(cardCol1, cardCol2);
                        cardDiv.append(cardRow);
                        rowDiv.append(cardDiv);

                    }
                }
            };
            xhttp.open("GET","../controlador/API/casa/selectCasa.php", true);
            xhttp.send();
        }

        carregarCases();

    });
</script>
</html>
