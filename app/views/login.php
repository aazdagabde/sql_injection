<!-- app/views/login.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(196, 235, 255) !important;">
<?php require_once 'include/nav.php';?>
<br><br><br><br><br><br>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6 col-lg-4 mx-auto">
            <h2 class="fw-bold text-center mb-4">Connexion</h2>
            <form method="post" action="">
            <input type="hidden" name="form_type" value="login">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="login" placeholder="name123">
                    <label for="floatingInput">Adresse email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="login_submit">Se connecter</button>
                </div>
            </form>

            <h2 class="fw-bold text-center mt-5">Inscription</h2>
            <form method="post" action="">
            <input type="hidden" name="form_type" value="register">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="login" placeholder="Login">
                    <label for="login">Login</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <label for="password">Mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="mail" class="form-control" name="email" placeholder="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                    <label for="nom">Nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                    <label for="prenom">Prénom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="age" placeholder="Age">
                    <label for="age">Age</label>
                </div>



                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary" name="register">S'inscrire</button>
                </div>
            </form>
            <br><br><br><br>
           

        </div>
    </div><br><br>
    <footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p class="mb-0">Réalisé par Abdellah Aazdag et Bousslama Salma - 2024</p>
    </div>
</footer>
</body>

</html>
