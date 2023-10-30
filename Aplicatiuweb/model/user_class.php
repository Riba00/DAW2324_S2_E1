<?php
require_once "dataBaseCon.php";

 class User {
    private $conn;
    private $table_name = "users";

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

    public function create($name, $surname) {

        $query = 'INSERT INTO users (name, surname) VALUES (:name, :surname)';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);

        $stmt->execute();
    }

    public function update($id, $name, $surname) {

        $query = 'UPDATE persons SET name = :name, surname = :surname WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);
        
        $stmt->execute();
    }

    public function delete($id) {
        
        $query = 'DELETE FROM persons WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
                
        $stmt->execute();
    }
} 

$usuario = new User();
$consulta=$usuario->getAll();
print_r($consulta);
?>