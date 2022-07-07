<?php

class Conn {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "estudos_php";
    public $port = "3306";
    public $connect = null;

    public function conectar(){
        try{
            $this->connect = new PDO("mysql:host=" . $this->host .";port=" . $this->port . ";dbname=" . 
            $this->dbname, $this->user, $this->pass);
            // echo "Conexão com bando de dados realizada com sucesso!";
            return $this->connect;

        }catch(Exception $erro){
            echo "Conexão com bando de dados não realizada!";
            return false;
        }
    }

}