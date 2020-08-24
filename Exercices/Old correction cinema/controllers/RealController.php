<?php



class RealController {
    
    public function findAll() {

    $dao = new DAO();
    $sql = "SELECT id_realisateur, nom_realisateur, prenom_realisateur 
                FROM realisateur
                ORDER BY nom_realisateur DESC";
    $reals = $dao->executerRequete($sql);
    require 'views/listReals.php';
    }
}