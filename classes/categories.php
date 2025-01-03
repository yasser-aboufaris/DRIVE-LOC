<?php
class Categories {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Fetch all categories
    public function read(){
        try {
            $qry = "SELECT * FROM categories";
            $stmt = $this->pdo->prepare($qry);
            $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            throw new Exception("Error jay mn hna: " . $th->getMessage());
        }
    }

    // Insert a new category
    public function create($id_categorie, $categorieName) {
        $qry = "INSERT INTO categories (id_categorie, categorieName) VALUES (:id_categorie, :categorieName)";
        $stmt = $this->pdo->prepare($qry);
        $stmt->bindParam(":id_categorie", $id_categorie);
        $stmt->bindParam(":categorieName", $categorieName);
        $stmt->execute();
        echo "Category created successfully.";
    }
}
