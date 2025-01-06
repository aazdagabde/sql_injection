<!-- app/views/users.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(196, 235, 255) !important;">
<?php require_once 'include/nav.php';?>
    <div class="container">
        <h2 class="mt-5">Votre Information</h2>
        <table style="background-color: rgb(255, 255, 255) !important;" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['nom']); ?></td>
                        <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($user['age']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['login']); ?></td>
                        <td>
                             <a href="index.php?action=edit&id=<?php echo htmlspecialchars($user['id']); ?>" class="btn btn-primary btn-sm">Modify</a>
                             <a href="index.php?action=delete&id=<?php echo htmlspecialchars($user['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br><br> <br><br><br><br><br><br><br><br><br>
    <footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p class="mb-0">Réalisé par Abdellah Aazdag et Bousslama Salma - 2024</p>
    </div>
</body>
</html>
