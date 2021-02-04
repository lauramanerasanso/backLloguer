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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/_general.css"/>

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
                    var i = 0;
                    for(cs in cases) {

                        if(i==3){
                            i=0;
                        }

                        if(i == 0){
                            var rowDIV = $("<div/>",{class:"row",});
                            $("#cardsCases").append(rowDIV);
                        }

                        i++;

                        var idCasa = cases[cs].id;
                        var nom = cases[cs].traduccioNom;
                        var desc = cases[cs].tradDescripcio;
                        var foto = "../imatges/"+cases[cs].img_principal;



                        var colDIV = $("<div/>",{class:"col-sm-4"});
                        var cardDIV = $("<div/>", {class:"card",style: "margin-bottom: 5%"});
                        var cardIMG = $("<img/>",{class:"card-img-top", src:foto, alt:"card image", style:"width:100%"});
                        cardDIV.append(cardIMG);
                        var cardBody = $("<div/>",{class:"card-body"});
                        var cardH4 = $("<h4/>",{class:"card-title", text:nom});
                        var cardP = $("<p/>",{class:"card-text", text:desc});
                        var cardA = $("<a/>",{href: "cases/gestionar/"+idCasa, class: "stretched-link"});
                        cardBody.append(cardH4, cardP, cardA);
                        cardDIV.append(cardBody);
                        colDIV.append(cardDIV);
                        rowDIV.append(colDIV);
                    }
                }
            };
            xhttp.open("GET","../API/casa/selectCasa.php", true);
            xhttp.send();
        }

        carregarCases();

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
