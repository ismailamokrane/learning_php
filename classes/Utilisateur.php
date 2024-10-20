<?php

$nom="ismail";
$email="pmr.amokrane@gmail.com";

class Utilisateur {
    private $nom;
    private $email;

    public function __construct($nom,$email){
        $this->nom=$nom;
        $this->email=$email;
    
    }

    public function getdetails(){
        return "Nom : ".$this->nom ." et mon email : ".$this->email;
    }
}
?>