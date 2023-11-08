<?php 
session_start();
include '../Model/ImatgeProducte.php';

class ImaProductControl {
    const RUTA = "../img/product_picanova/";

    private $imaProductModel;

    public function __construct() {
        $this->imaProductModel = new ImageProduct();
    }

    //Entre $productId que es el id del producte 
    // $nimatge el nom de la imatge que es solicita
    public function mostrarImagen($productId, $nimatge) {
        $rutaImagen = $this->imaProductModel->obtenerNomImagens($productId);
        return RUTA.$rutaImagen[$nimatge];
        
    }
}