<?php
class Produit {
    private $nom;
    private $prix;

    public function __construct($nom, $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getDetails() {
        return "Produit : " . $this->nom . ", Prix : " . $this->prix . "€";
    }
}
?>
