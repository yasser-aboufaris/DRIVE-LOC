<?php
class Reservation {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function delete($id) {
    

        $query = "DELETE FROM reservation WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
        
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


    public function reserve($id_user,$startDay,$end_day,$id_car){
        $qry="insert into reservation (id_user)";
    }

    public function accept($id) {
        if (!is_numeric($id)) {
            throw new InvalidArgumentException("Invalid reservation ID");
        }
    
        $query = "UPDATE reservation SET status = 'accepted' WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        
        try {
            return $stmt->execute();
        } catch (PDOException $e) {
        
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

                            
    public function read(){
        $qry="select * from reservation";
        $stmt = $this->pdo->prepare($qry);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        
    }
}