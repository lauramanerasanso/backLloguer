<?php



class controlador_casa
{

public function select(){

    $con_db = DataBase::getConn();


    $casa = new Casa($con_db);
    $array_casa = array();

    $resultat = $casa->select();

    while ($row = $resultat->fetch_assoc()){
        $_casa = array(
            'id' => $row['id'],
            'nom' => $row['nom'],
            'descripcio' => $row['descripcio'],
            'banys' => $row['banys'],
            'hab' => $row['hab']
        );

        array_push($array_casa,$_casa);
    }


    echo json_encode($array_casa);
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



}

