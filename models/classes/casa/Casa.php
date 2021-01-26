<?php


class casa
{


    protected $conexio;
    private $id;
    private $nom;
    private $desc;
    private $banys;
    private $hab;

    public function __construct($database){
        $this->conexio = $database;
    }


    public function select(){

        $query = "SELECT casa.id, traduccioCasa.traduccioNom, traduccioCasa.tradDescripcio, imatge.img_principal FROM casa JOIN traduccioCasa ON casa.id = traduccioCasa.casa_id JOIN imatge ON casa.id = imatge.casa_id WHERE traduccioCasa.idioma_id='CA';";

        $stmt = $this->conexio->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;

    }

    public function insert($nBanys, $nHab, $x, $y, $pob, $tarifa ){


        $stmt = $this->conexio->prepare("INSERT INTO casa (nBanys, nHabitacions, x, y, poblacio_id , propietari_persona_id, tarifaDefault) VALUES (?,?,?,?,?,1,?)");
        $stmt->bind_param("iiiiid", $nBanys, $nHab, $x, $y, $pob, $tarifa );
        $stmt->execute();


        return $stmt;

    }

    public function select_id($x,$y){

        $stmt = $this->conexio->prepare("SELECT id FROM casa WHERE x = ? AND y = ?");
        $stmt->bind_param("ii", $x, $y);
        $stmt->execute();

        $resultat = $stmt->get_result();
        $row = $resultat->fetch_assoc();

        return $row['id'];

    }

    public function select_id_max(){

        $query = "SELECT MAX(id) AS id FROM casa";

        $stmt = $this->conexio->prepare($query);
        $stmt->execute();

        $resultat = $stmt->get_result();
        $row = $resultat->fetch_assoc();

        return $row['id'];

    }

    public function insertImatges($id,$i1,$i2,$i3,$i4,$i5){
        $stmt = $this->conexio->prepare("INSERT INTO imatge VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssssi", $i1,$i2,$i3,$i4,$i5, $id);
        $stmt->execute();


        return $stmt;
    }

    public function insertCaract($idCaract,$idCasa){
        $stmt = $this->conexio->prepare("INSERT INTO caracteristicaCasa VALUES (?,?)");
        $stmt->bind_param("ii", $idCasa,$idCaract);
        $stmt->execute();


        return $stmt;

    }

    public function traduccio($idCasa,$nom1,$desc1,$nom2,$desc2){

        $stmt = $this->conexio->prepare("INSERT INTO traduccioCasa VALUES (?, 'CA', ?, ?), (?,'EN',?,?)");
        $stmt->bind_param("ississ", $idCasa ,$nom1,$desc1,$idCasa,$nom2,$desc2);
        $stmt->execute();


        return $stmt;

    }


}
