<?php

class Cars {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function add($model, $description, $category, $image_url) {
        // Map category names to numbers
    

        // Get the category number based on the selected category
        

    
            $qry = "INSERT INTO cars (model, description, category, image_url) VALUES (:model, :description, :category, :image_url);";
            $stmt = $this->pdo->prepare($qry);
            $stmt->bindParam(":model", $model);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":category", $category);  
            $stmt->bindParam(":image_url", $image_url);
            $stmt->execute();
        }
    
        public function read(){
            try {
                $qry = "SELECT * FROM cars";
                $stmt = $this->pdo->prepare($qry);
                $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $th) {
                throw new Exception("Error jay mn hna: " . $th->getMessage());
            }
        }
    



    public function delete($id) {
        

        $query = "DELETE FROM cars WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
        
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
$car = new Cars($conn);
