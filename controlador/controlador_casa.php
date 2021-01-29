<?php



class controlador_casa
{

public function select(){

    $con_db = DataBase::getConn();
    $casa = new Casa($con_db);

    $result = $casa->select();

    $outp = $result->fetch_all(MYSQLI_ASSOC);
    return $outp;


}

public function insertCasa($pob,$banys, $hab, $x , $y, $preu, $nom1, $nom2, $desc1, $desc2,$caract){

    $con_db = DataBase::getConn();

    $p = new Poblacio($con_db);
    $casa = new Casa($con_db);

    $p->setNom($pob);
    $afegit = $p->insertPoblacio();

    if(isset($afegit)){
        $idPob = $p->selectPoblID();
        $insertCasa = $casa->insert($banys,$hab,$x,$y,$idPob,$preu);
    }

    if(isset($insertCasa)){
        $idCasa = $casa->select_id($x,$y);
        $casa->traduccio($idCasa,$nom1,$desc1,$nom2,$desc2);

        for($i = 0; $i < count($caract); $i++){

            $casa->insertCaract($caract[$i],$idCasa);
        }


    }


return $idCasa;

}

public function id_Max(){
    $con_db = DataBase::getConn();
    $casa = new Casa($con_db);
    return $casa->select_id_max();
}

public function inserirFotos($idCasa,$f1,$f2,$f3,$f4,$f5){
    $con_db = DataBase::getConn();
    $casa = new Casa($con_db);

    $casa->insertImatges($idCasa,$f1,$f2,$f3,$f4,$f5);
}


    public function select_casa_nom($id)
    {
        $con_db = DataBase::getConn();
        $casa = new Casa($con_db);

        $result = $casa->select_casa_nom($id);

        $outp = $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($outp);
    }

    public function select_caract($id)
    {
        $con_db = DataBase::getConn();
        $casa = new Casa($con_db);

        $result = $casa->select_caract($id);

        $outp = $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($outp);

    }

    public function select_info($id)
    {

        $con_db = DataBase::getConn();
        $casa = new Casa($con_db);

        $result = $casa->select_info($id);

        $outp = $result->fetch_all(MYSQLI_ASSOC);

        echo json_encode($outp);

    }

    public function updateCasa($idCasa, $pob, $banys, $hab, $x, $y, $preu, $nom1, $nom2, $desc1, $desc2, $caract)
    {

        $con_db = DataBase::getConn();
        $p = new Poblacio($con_db);
        $casa = new Casa($con_db);

        $p->setNom($pob);
        $afegit = $p->insertPoblacio();

        if (isset($afegit)) {
            $idPob = $p->selectPoblID();
            $update = $casa->updateCasa($idCasa, $banys, $hab, $x, $y, $idPob, $preu);
        }

        if (isset($update)) {
            $casa->deleteCaract($idCasa);

            for ($i = 0; $i < count($caract); $i++) {

                $casa->insertCaract($caract[$i], $idCasa);
            }

            $casa->updateTraduccio($idCasa, $desc1, $nom1, "CA");
            $casa->updateTraduccio($idCasa, $desc2, $nom2, "EN");


        }


    }

    public function insertBloqueig($idCasa, $dataInici, $dataFi){

    $con_db = DataBase::getConn();
    $casa = new Casa($con_db);

    $casa->inserirBloqueig($idCasa, $dataInici, $dataFi);

}

public function comprovReserva($idCasa, $dataInici, $dataFi){

    $con_db = DataBase::getConn();
    $casa = new Casa($con_db);

    return $casa->comprovarReserva($idCasa, $dataInici, $dataFi);
}




}
