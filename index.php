<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Autenticació</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/_autenticacio.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee" rel="stylesheet">


</head>

<body>

<div id="d" class="min-vh-100">
    <img src="imatges/logo_final.png">


    <div class="container auth align-self-center">
        <h1>AUTENTICACIÓ</h1>
        <form class="col" action="controlador/API/user/checkPasswd.php" method="post">
            <div class="form-row">
                <div class="form-group col-6 col-md-6 col-sm-6">
                    <label for="username">USUARI</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="USUARI">
                </div>
                <div class="form-group col-5 col-md-5 col-sm-5">
                    <label for="passwd">CONTRASENYA</label>
                    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="CONTRASENYA">
                </div>
                <div class=" text-white col-1 col-md-1 col-sm-1 mt-3 pt-3">
                    <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                </div>
            </div>
            <div class="d-flex">
            <button type="submit" id="bEntrar" class="btn col-md-2 ml-auto">Entra</button>
            </div>


    </div>
</div>
<script>

    function show() {
        var p = document.getElementById('passwd');
        p.setAttribute('type', 'text');
    }

    function hide() {
        var p = document.getElementById('passwd');
        p.setAttribute('type', 'password');
    }

    var pwShown = 0;

    document.getElementById("eye").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
</script>

</body>

</html>