<?php


class User{
    protected $conn;

    private $id;
    private $userName;
    private $password;

    public function __construct($db){
        $this->conn = $db;
    }

    public function setId($codi){
        $this->id=$codi;
    }

    public function setUserName($username){
        $this->userName=$username;
    }

    public function setPassword($passwd){
        $this->password=$passwd;
    }

    public function autenticacio(){
        $sql = "SELECT contrasenya FROM propietari WHERE nomusuari=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->userName);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    public function checkPasswd(){
        $sql = "SELECT contrasenya FROM propietari WHERE id = 1";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    public function changePasswd(){
        $sql = "UPDATE propietari SET contrasenya = ? WHERE id = 1;";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->password);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result;
    }

    public function create(){
        $sql = "INSERT INTO users(user_name, privileges) VALUES(?,?);";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $this->user_name, $this->privileges);
        $stmt->execute();

        return $stmt;

    }

    public function update(){
        $sql = " UPDATE users SET user_name=?, privileges=? WHERE id=? ";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $this->user_name, $this->privileges, $this->id);
        $stmt->execute();

        return $stmt;
    }

    public function delete(){
        $sql = " DELETE FROM users WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();

        return $stmt;
    }
}