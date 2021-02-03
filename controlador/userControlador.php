<?php


class userControlador{

    public function checkAuth($userName, $passwd){

        $db = DataBase::getConn();

        $user = new User($db);
        $user->setUserName($userName);

        $result=$user->autenticacio();

        $row = $result->fetch_assoc();

        if($passwd==$row['contrasenya']) {
            $user->setPassword($row['contrasenya']);
            session_start();
            $_SESSION['acces'] = "SI";
            header('Location: ../../vista/principal.php');
        }else{
            header('Location: ../../index.php');
        }
    }

    public function changePassword($oldPasswd, $newPasswd){
        $db = DataBase::getConn();

        $user = new User($db);
        $user->setPassword($oldPasswd);

        $result=$user->checkPasswd();

        $row = $result->fetch_assoc();

        if($oldPasswd==$row['contrasenya']) {
            $user1 = new User($db);
            $user1->setPassword($newPasswd);
            $res = $user1->changePasswd();
            header('Location: ../../../vista/principal.php');
        }else{
            header('Location: ../../../vista/gestioUsuari.php');
        }
    }
}