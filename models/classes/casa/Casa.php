<?php


class casa
{


    protected $conexio;
    private $id;
    private $nom;
    private $desc;
    private $banys;
    private $hab;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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


    public function select_casa_nom($id){

        $stmt = $this->conexio->prepare("SELECT traduccioCasa.traduccioNom, traduccioCasa.tradDescripcio FROM casa JOIN traduccioCasa ON traduccioCasa.casa_id=casa.id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }

    public function select_caract($id){

        $stmt = $this->conexio->prepare("SELECT caracteristicaCasa.caracteristica_id FROM casa JOIN caracteristicaCasa ON caracteristicaCasa.casa_id = casa.id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }

    public function select_info($id){

        $stmt = $this->conexio->prepare("SELECT casa.nHabitacions, casa.nBanys, casa.x, casa.y, poblacio.nom, casa.tarifaDefault FROM casa JOIN poblacio ON poblacio.id = casa.poblacio_id WHERE casa.id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;
    }

    public function updateCasa($idCasa, $nBanys, $nHab, $x, $y, $pob, $tarifa){


        $stmt = $this->conexio->prepare("UPDATE casa SET nBanys = ?, nHabitacions = ?, x = ?, y = ? , poblacio_id = ? , tarifaDefault = ? WHERE id = ?");
        $stmt->bind_param("iiddidi", $nBanys, $nHab, $x, $y, $pob, $tarifa, $idCasa);
        $stmt->execute();


        return $stmt;

    }

    public function deleteCaract($idCasa){
        $stmt = $this->conexio->prepare("DELETE FROM caracteristicaCasa WHERE casa_id = ?");
        $stmt->bind_param("i", $idCasa);
        $stmt->execute();


        return $stmt;
    }

    public function updateTraduccio($idCasa, $desc, $nom, $idioma){

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

    public function comprovarReserva($idCasa, $dataInici, $dataFi){

        $stmt = $this->conexio->prepare("SELECT count(*) FROM reserva JOIN bloqueig ON bloqueig.casa_id=reserva.casa_id WHERE((? BETWEEN reserva.data_inici AND reserva.data_fi) OR (? BETWEEN reserva.data_inici AND reserva.data_fi) OR (reserva.data_inici BETWEEN ? AND ?)) AND reserva.casa_id = ?");
        $stmt->bind_param("ssssi", $dataInici, $dataFi, $dataInici, $dataFi, $idCasa);
        $stmt->execute();

        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        return $row['count(*)'];

    }

    public function comprovarDatesTarifa($idCasa, $dataInici, $dataFi){

        $stmt = $this->conexio->prepare("SELECT count(*) FROM tarifa WHERE ((? BETWEEN tarifa.data_inici AND tarifa.data_fi) OR (? BETWEEN tarifa.data_inici AND tarifa.data_fi) OR (tarifa.data_inici BETWEEN ? AND ?)) AND tarifa.casa_id = ?");
        $stmt->bind_param("ssssi", $dataInici, $dataFi, $dataInici, $dataFi, $idCasa);
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

    public function seleccionarNomTarifes($id){

        $stmt = $this->conexio->prepare("SELECT nom_tarifa, preu_tarifa FROM tarifa WHERE casa_id = ? group by nom_tarifa");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;

    }


    public function selectTarifes(){

        $stmt = $this->conexio->prepare("SELECT * FROM tarifa WHERE casa_id = ?");
        $stmt->bind_param("i", $this->id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;
    }

    public function selectUnaTarifa($dataInici){

        $stmt = $this->conexio->prepare("SELECT * FROM tarifa WHERE casa_id = ? AND data_inici = ?");
        $stmt->bind_param("i", $this->id, $dataInici);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;
    }

    public function updateAplicacioTarifa($dataInici, $dataIniciNew, $dataFiNew, $nom){
        $stmt = $this->conexio->prepare("UPDATE tarifa SET tarifa.data_inici = ?, tarifa.data_fi = ? WHERE tarifa.data_inici = ? AND tarifa.nom_tarifa = ? AND tarifa.casa_id = ?;");
        $stmt->bind_param("ssssi", $dataIniciNew, $dataFiNew, $dataInici, $nom,$this->id);
        $stmt->execute();

        return $stmt;
    }

    public function updateNomPreuTarifa($nom, $nomNew, $preuNew){
        $stmt = $this->conexio->prepare("UPDATE tarifa SET tarifa.nom_tarifa = ?, tarifa.preu_tarifa = ? WHERE tarifa.nom_tarifa = ? AND tarifa.casa_id = ?;");
        $stmt->bind_param("sssi", $nomNew, $preuNew, $nom, $this->id);
        $stmt->execute();

        return $stmt;
    }

    public function deleteTarifa($dataInici, $nom){
        $stmt = $this->conexio->prepare("DELETE FROM tarifa WHERE tarifa.nom_tarifa = ? AND tarifa.data_inici = ? AND tarifa.casa_id = ? ;");
        $stmt->bind_param("ssi", $nom, $dataInici, $this->id);
        $stmt->execute();

        return $stmt;
    }

    public function selectBloq(){
        $stmt = $this->conexio->prepare("SELECT * FROM bloqueig WHERE casa_id = ?");
        $stmt->bind_param("i", $this->id);
        $stmt->execute();

        $resultat = $stmt->get_result();

        return $resultat;
    }

    public function updateBloq($dataInici, $dataIniciNew, $dataFiNew){
        $stmt = $this->conexio->prepare("UPDATE bloqueig SET bloqueig.data_inici = ?, bloqueig.data_fi = ? WHERE bloqueig.data_inici = ? AND bloqueig.casa_id = ?;");
        $stmt->bind_param("sssi", $dataIniciNew, $dataFiNew, $dataInici, $this->id);
        $stmt->execute();

        return $stmt;
    }

    public function deleteBloq($dataInici){
        $stmt = $this->conexio->prepare("DELETE FROM bloqueig WHERE bloqueig.data_inici = ? AND bloqueig.casa_id = ? ;");
        $stmt->bind_param("si", $dataInici, $this->id);
        $stmt->execute();

        return $stmt;
    }

}
