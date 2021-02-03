<?php
include_once '../../models/classes/user/User.php';
include_once('../../models/config/DataBase.php');
include_once '../../controlador/userControlador.php';


if(isset($_POST['username']) &&  isset($_POST['passwd'])){
        $userName=$_POST['username'];
        $passwd=$_POST['passwd'];

        $controlador = new userControlador();
        $controlador->checkAuth($userName, $passwd);



}