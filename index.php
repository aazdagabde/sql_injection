<?php
require_once 'app/controllers/LoginController.php';
require_once 'app/controllers/UserController.php';

$loginController = new LoginController();
$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle login and update requests
    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        $userController->updateUser();
    } else {
        $loginController->index();
    }
} elseif (isset($_GET['action'])) {
    // Handle GET requests for edit, delete, etc.
    if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
        $userController->editUser($_GET['id']);
    } elseif ($_GET['action'] === 'delete' && isset($_GET['id'])) {
        $userController->deleteUser($_GET['id']);
    } else {
        $loginController->index();
    }
} else {
    // Default to the login page
    $loginController->index();
}
