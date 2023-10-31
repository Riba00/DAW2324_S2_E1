<?php
require_once "dataBaseCon.php";

 class User {
    private $conn;
    public $id;
    public $userName;
    public $email;
 
    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        
        $query = 'SELECT * FROM users';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);;
    }

    public function getById($id) {

        $query = 'SELECT * FROM users WHERE id = :id';
  
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

   
    public function delete($id) {
        
        $query = 'DELETE FROM users WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
                
        $stmt->execute();
    }
} 

$usuario = new User();
$consulta=$usuario->getAll();
print_r($consulta);
?>