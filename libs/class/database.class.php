<?php

class Database{

    private static $host = 'localhost';
    private static $driver = 'mysql';
    private static $database = "jeuxancien";
    private static $user = "root";
    private static $password = "";

    private static $_conn;

    private static function conn(){
        if(empty(self::$_conn)){
            try{
                self::$_conn = new PDO(self::$driver.":host=".self::$host.";dbname=".self::$database, self::$user, self::$password);
            } catch(PDOException $e){
                // var_dump($e->getMessage());
                self::$_conn = null;
            }
        }
        return self::$_conn;
    }

    public static function getAll(){
        $sql = "SELECT * FROM `jeuxvideoanciens`";
        $req = self::conn()->query($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, "Jeuxvideo");
        return $req->fetchAll();
    }

    public static function getById($id){
        $sql = "SELECT * FROM `jeuxvideoanciens` WHERE `ID` = :id LIMIT 1";
        $req = self::conn()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, "Jeuxvideo");
        $req->bindValue(":id", $id);
        $req->execute();
        return $req->fetch();
    }

    public static function delete($id){
        $sql = "DELETE FROM `jeuxvideoanciens` WHERE `ID` = :id LIMIT 1";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":id", $id);
        return $req->execute();
    }

    public static function save($obj){
        $sql = "INSERT INTO `jeuxvideoanciens` (`nom`, `realisateur`, `annee`, `plateforme`) VALUES (:nom, :realisateur, :annee, :plateforme);";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":nom", $obj->nom);
        $req->bindValue(":realisateur", $obj->realisateur);
        $req->bindValue(":annee", $obj->annee);
        $req->bindValue(":plateforme", $obj->plateforme);
        return $req->execute();
    }
    public static function update($obj){
        $sql = "UPDATE `jeuxvideoanciens` SET `nom` = :nom, `realisateur` = :realisateur, `annee` = :annee, `plateforme` = :plateforme WHERE `jeuxvideoanciens`.`ID` = :ID ";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":ID", $obj->ID);
        $req->bindValue(":nom", $obj->nom);
        $req->bindValue(":realisateur", $obj->realisateur);
        $req->bindValue(":annee", $obj->annee);
        $req->bindValue(":plateforme", $obj->plateforme);
        return $req->execute();
    }
}