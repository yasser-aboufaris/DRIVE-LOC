<?php

class Cars {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function add($model, $description, $category, $image_url) {
        // Map category names to numbers
        $categoryList = [
            'suv' => 1,
            'sedan' => 2,
            'hatchback' => 3
        ];

        // Get the category number based on the selected category
        $categoryNum = isset($categoryList[$category]) ? $categoryList[$category] : null;

        if ($categoryNum !== null) {
            $qry = "INSERT INTO cars (model, description, category, image_url) VALUES (:model, :description, :category, :image_url);";
            $stmt = $this->pdo->prepare($qry);
            $stmt->bindParam(":model", $model);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":category", $categoryNum);  
            $stmt->bindParam(":image_url", $image_url);
            $stmt->execute();
        } else {
            echo "Invalid category.";
        }
    }



    public function delete(){
        $sql="";
    }
}
