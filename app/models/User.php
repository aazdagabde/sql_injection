
<?php
class User {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=test_injection_sql', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function authenticate($login, $password) {
        // Requête vulnérable (ici on ajoute "  OR '1'='1  ")
        $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
        
        // Affichez la requête finale pour confirmation
        echo " <p  class='bg-danger text-white text-center fw-bold p-3'>Requête SQL : " . $query . "</p><br>";
        
        try {
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur SQL : " . $e->getMessage();
            return false;
        }
    }

    public function register($login, $password, $email, $nom, $prenom, $age) {
        $query = "INSERT INTO users (login, password, email, nom, prenom, age) VALUES (:login, :password, :email, :nom, :prenom, :age)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute(['login' => $login, 'password' => $password, 'email' => $email, 'nom' => $nom, 'prenom' => $prenom, 'age' => $age]);
    }

   
    public function update() {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
    
        // Use a prepared statement to avoid SQL injection
        $sqlState = $this->pdo->prepare('UPDATE users SET nom = ?, prenom = ?, age = ?, login = ?, password = ?,email =? WHERE id = ?;');
        
        // Execute the query with the data securely
        return $sqlState->execute([$nom, $prenom, $age, $login, $password, $email, $id]);
    }
    public function getStagaireById($id) {
        // Prepare and execute the query to securely fetch a user by ID
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        
        // Return the user data as an associative array
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteUser($id) {
        // Prepare the DELETE statement
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
    
        // Execute the statement with the provided user ID
        return $stmt->execute(['id' => $id]);
    }
    
    
}
?>
