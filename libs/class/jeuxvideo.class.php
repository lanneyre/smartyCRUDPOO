<?php

class Jeuxvideo{

    // les noms des attributs correspondent a mes champs de tables
    public $ID;
    public $nom;
    public $realisateur;
    public $annee;
    public $plateforme;

    public static function build($nom = null, $realisateur = null, $annee = null, $plateforme = null, $ID = null){
        $obj = new static;
        $obj->nom = $nom;
        $obj->realisateur = $realisateur;
        $obj->annee = $annee;
        $obj->ID = $ID;
        $obj->plateforme = $plateforme;
        return $obj;
    }

    public function save(){
        if(!empty($this->ID)){
            return database::update($this);
        }else {
            return database::save($this);
        }  
    }

    public static function getAll(){
        return database::getAll();
    }

    public static function getById($id){
        return database::getById($id);
    }

    public static function delete($id){
        return database::delete($id);
    }
}