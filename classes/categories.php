<?
class reservation{
    private $pdo;

    public function __construct($pdo){
            $this->pdo=$pdo;
    }

    public function create ($id_categorie,$categorieName){
        $sql = "insert into categories () values(:id)";
    }
}