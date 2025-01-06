
<?php
require_once 'app/models/User.php';

class LoginController {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'login') {
            // Connexion 
            $login = $_POST['login'];
            $password = $_POST['password'];

            $userModel = new User();
            $users = $userModel->authenticate($login, $password);

            if ($users) {
                require_once 'UserController.php';
                $userController = new UserController();
                $userController->showUsers($users);
                exit;
            } else {
                echo "<p  class='bg-danger text-white text-center fw-bold p-3'>Identifiants incorrects ou utilisateur non trouvé.</p>";
            }
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'register') {
            // inscription des la nv utilisateur
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];

            $userModel = new User();
            $isRegistered = $userModel->register($login, $password, $email, $nom, $prenom, $age);

            if ($isRegistered) {
                echo "<p  class='bg-success text-white text-center fw-bold p-3'>Inscription réussie. Vous pouvez maintenant vous connecter.</p>";
            } else {
                echo "<<p  class='bg-danger text-white text-center fw-bold p-3'>Erreur lors de l'inscription.</p>";
            }
        }

        include 'app/views/login.php';
    }
}

?>
