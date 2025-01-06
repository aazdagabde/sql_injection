<?php
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function showUsers($users) {
        include 'app/views/users.php';
    }

    public function editUser($id) {
        // Get the user data from the model
        $user = $this->userModel->getStagaireById($id);
        include 'app/views/edit.php';
    }

    public function updateUser() {
        // Call the model to update user data
        $this->userModel->update();
        // Redirect to the users list
        header('Location: index.php');
        exit;
    }
    public function deleteUser($id) {
        $userModel = new User();
        if ($userModel->deleteUser($id)) {
            echo "<p  class='bg-success text-white text-center fw-bold p-3'> Utilisateur supprimé avec succès.</p>";
        } else {
            echo "<p  class='bg-danger text-white text-center fw-bold p-3'>Erreur lors de la suppression de l'utilisateur.</p>";
        }
    }

    
}
