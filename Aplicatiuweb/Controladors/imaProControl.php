<?php 
session_start();
include '../Model/ImatgeProducte.php';

define("RUTA", "../img/product_picanova/");

class ImaProductControl {
    

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
$ima = new ImaProductControl();
$ruta = $ima->mostrarImagen(1, 1);