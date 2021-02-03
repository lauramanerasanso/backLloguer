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
        $stmt->bind_param("iiddid", $nBanys, $nHab, $x, $y, $pob, $tarifa );
        $stmt->execute();


        return $stmt;

    }

    public function select_id($x,$y){

        $stmt = $this->conexio->prepare("SELECT id FROM casa WHERE x = ? AND y = ?");
        $stmt->bind_param("dd", $x, $y);
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
        $stmt->bind_param("ississ", $idCasa ,$desc1,$nom1,$idCasa,$desc2,$nom2);
        $stmt->execute();


        return $stmt;

    }


    public function select_casa_nom($id)
    {

        $stmt = $this->conexio->prepare("SELECT traduccioCasa.traduccioNom, traduccioCasa.tradDescripcio FROM casa JOIN traduccioCasa ON traduccioCasa.casa_id=casa.id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }

    public function select_caract($id)
    {

        $stmt = $this->conexio->prepare("SELECT caracteristicaCasa.caracteristica_id FROM casa JOIN caracteristicaCasa ON caracteristicaCasa.casa_id = casa.id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }

    public function select_info($id)
    {

        $stmt = $this->conexio->prepare("SELECT casa.nHabitacions, casa.nBanys, casa.x, casa.y, poblacio.nom, casa.tarifaDefault FROM casa JOIN poblacio ON poblacio.id = casa.poblacio_id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;
    }

    public function updateCasa($idCasa, $nBanys, $nHab, $x, $y, $pob, $tarifa)
    {


        $stmt = $this->conexio->prepare("UPDATE casa SET nBanys = ?, nHabitacions = ?, x = ?, y = ? , poblacio_id = ? , tarifaDefault = ? WHERE id = ?");
        $stmt->bind_param("iiddidi", $nBanys, $nHab, $x, $y, $pob, $tarifa, $idCasa);
        $stmt->execute();


        return $stmt;

    }

    public function deleteCaract($idCasa)
    {
        $stmt = $this->conexio->prepare("DELETE FROM caracteristicaCasa WHERE casa_id = ?");
        $stmt->bind_param("i", $idCasa);
        $stmt->execute();


        return $stmt;
    }

    public function updateTraduccio($idCasa, $desc, $nom, $idioma)
    {

        $stmt = $this->conexio->prepare("UPDATE traduccioCasa SET tradDescripcio = ?, traduccioNom = ? WHERE casa_id = ? AND idioma_id = ?");
        $stmt->bind_param("ssis", $desc, $nom, $idCasa, $idioma);
        $stmt->execute();


        return $stmt;
    }


    public function inserirBloqueig($idCasa,$dataInici,$dataFi){

        $stmt = $this->conexio->prepare("INSERT INTO bloqueig VALUES(?,?,?)");
        $stmt->bind_param("ssi", $dataInici,$dataFi,$idCasa);
        $stmt->execute();

        return $stmt;

    }

    public function comprovarReserva($idCasa,$dataInici, $dataFi){

        $stmt = $this->conexio->prepare("SELECT count(*) FROM reserva JOIN bloqueig ON bloqueig.casa_id=reserva.casa_id WHERE (reserva.data_fi BETWEEN (?) AND (?)) OR (reserva.data_inici BETWEEN (?) AND (?)) AND reserva.casa_id=?");
        $stmt->bind_param("ssssi", $dataInici, $dataFi,$dataInici, $dataFi, $idCasa);
        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        return $row['count(*)'];

    }

    public function inserirTarifa($idCasa, $preuTarifa, $dataInici, $dataFi, $nomTarifa){

        $stmt = $this->conexio->prepare("INSERT INTO tarifa VALUES(?,?,?,?,?)");
        $stmt->bind_param("idsss",$idCasa, $preuTarifa, $dataInici, $dataFi, $nomTarifa);
        $stmt->execute();

        return $stmt;

    }

    public function seleccionarNomTarifes($id)
    {

        $stmt = $this->conexio->prepare("SELECT nom_tarifa, preu_tarifa FROM tarifa WHERE casa_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }




}
