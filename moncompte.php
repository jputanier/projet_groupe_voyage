<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" href="./css/style.css">
    <title>Mon compte</title>
</head>
<body>
<header>
        <div class="text-center headeR">
            <img src="./img/logo-voayaj.png" alt="logo voayaj">
        </div>
        <?php if(isset($_SESSION['login'])): ?>
                <?php if($_SESSION['login'] == "login" && $_SESSION['password'] == "pass"): ?>
                    <div id="div_logo_user"><a href="./controllers/deconnection.php">
                        <figure>
                            <i class="fas fa-user-times logo_user"></i>
                            <figcaption>Déconnection</figcaption>
                        </figure></a>
                    </div>  
                <?php else: ?>
                    <div id="div_logo_user"><a href="./inscription.php">
                        <figure>
                            <i class="fas fa-user-plus logo_user"></i>
                            <figcaption>Inscription</figcaption>
                        </figure></a>
                    </div>
                    <div id="div_logo_user"><a href="./login.php">
                        <figure>
                            <i class="fas fa-user logo_user"></i>
                            <figcaption>Connection</figcaption>
                        </figure></a>
                    </div>
                <?php endif ?>
        <?php else: ?>
            <div id="div_logo_user"><a href="./inscription.php">
                    <figure>
                        <i class="fas fa-user-plus logo_user"></i>
                        <figcaption>Inscription</figcaption>
                    </figure></a>
            </div>
            <div id="div_logo_user"><a href="./login.php">
                <figure>
                    <i class="fas fa-user logo_user"></i>
                    <figcaption>Connection</figcaption>
                </figure></a>
            </div>
        <?php endif ?>
</header>
<?php require "./templates/header.php"?>
<main>
    <h1>Mon Compte</h1>
    <p>Bonjour <?php echo $_SESSION['login'] ?></p>
    <p>Mes choix de voyages:</p>
</main>

<?php require "./templates/footer.html"?>
</body>
</html>