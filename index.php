<?php
require_once 'autoloader.php';

$produit = new Produit("pc",1200);
echo $produit->getDetails()."<br>";

$utilisateur = new Utilisateur("ismail","ismail@gmail.com");
echo $utilisateur->getdetails()."<br>";
?>





