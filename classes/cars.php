<?php

class Cars{
    private $pdo;
    public function __construct($pdo){
        $this->pdo =$pdo;
    }
    public function add($model,$description,$category,$image_url){
        $qry = "insert into cars (model,description,image_url) values(:model,:description,:image_url);";
        $stmt = $this->pdo->prepare($qry);
        $stmt->bindParam(":model",$model);
        $stmt->bindParam(":description",$description);
        $stmt->bindParam(":image_url",$image_url);

    }
}
