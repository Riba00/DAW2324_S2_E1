<?php 
include '../Model/producteModel.php';

class ProducteControl {
    

    private $productControl;

    public function __construct() {
        $this->productControl = new Product();
    }

    //Entre $productId que es el id del producte 
    // $nimatge el nom de la imatge que es solicita
    public function mostrarPreu($productId) {
        $preu = $this->productControl->obtenirPreu($productId);
        return $preu[0]["sell_price"]; //sols tindra un resultat
    }

    public function mostrarNom($productId) {
        $nom = $this->productControl->obtenirName($productId);
        return $nom[0]["name"]; //sols tindra un resultat
    }

    public function llistarProducts () {
        $productes = $this->productControl->obtenirTots();

        header('Content-Type: application/json');
        echo json_encode($productes);
    }
}
