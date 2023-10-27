<?php
require "dataBaseCon.php";

function getAll() {
        
    $query = 'SELECT * FROM persons';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
}
$pr = getAll();
print_r($pr);
?>