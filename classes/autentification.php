<?php
class Login {
    private $pdo;


    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function login($email, $password) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            try {
                $qry = "SELECT id, name, password FROM users WHERE email = :email";
                $stmt = $this->pdo->prepare($qry);
                $stmt->bindParam(":email", $email);
                $stmt->execute();

                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["user_name"] = $user["name"];
                    $_SESSION["user_email"] = $email;

                    header("Location: ../Vue/index.php");
                    exit;
                } else {
                    echo "Invalid email or password. Please try again.";
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
////////////////////////////////////////////////////////////////////////////
    
    public function sign_up($email, $name, $password, $confirm) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($password === $confirm) {
                try {
                    // Check if user already exists
                    $qryCheck = "SELECT COUNT(email) FROM users WHERE email = ?";
                    $stmt = $this->pdo->prepare($qryCheck);
                    $stmt->execute([$email]);
                    $result = $stmt->fetchColumn();

                    if ($result == 0) {
                        // Hash password
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        // Insert user data
                        $qrySign = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
                        $statement = $this->pdo->prepare($qrySign);
                        $statement->bindParam(":name", $name);
                        $statement->bindParam(":email", $email);
                        $statement->bindParam(":password", $hashedPassword);
                        $statement->execute();

                        // Insert role for user
                        $lastId = $this->pdo->lastInsertId();
                        $sqlRole = "INSERT INTO role (id_user) VALUES (:id)";
                        $stmt2 = $this->pdo->prepare($sqlRole);
                        $stmt2->bindParam(":id", $lastId);
                        $stmt2->execute();

                        echo "Registration successful.";
                    } else {
                        echo "This user already exists.";
                    }
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Passwords do not match.";
            }
        }
    }
}
