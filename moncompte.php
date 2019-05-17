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
        <img src="./img/logo_voyages_voayaj.png" alt="logo voayaj">            
        </div>
        <?php if(isset($_SESSION['courriel'])): ?>

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
</header>
<?php require "./templates/header.html"?>

<main id="moncompte_body">
    <div id="form">
        <h1>Mon Compte</h1>
        <p>Bonjour <?php echo $_SESSION['nom'] ?></p>
        <?php if($_SESSION['choix'] == 'tartiflette'): ?>
        <p>Vous n'avez pas choisi de ville.</p>
        <?php else: ?>
        <p>Vous avez choisi la ville de <?php echo $_SESSION['choix'] ?>.</p>
        <?php endif ?>
        <form method="POST" action="./controllers/majVille.php">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                    <input type="hidden" name="choix" value="tartiflette">
                    <input type="submit" value="X">
        </form>
            <p>Ici, vous pourrez modifier ou supprimer vos paramètres de compte :</p>

        <div>
            <form action="./controllers/updateCourriel.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

                <label for="courriel">courriel :</label>
                <input type="text" name="courriel" value="<?= $_SESSION['courriel'] ?>">
                <input type="submit" value="U">
            </form>

            <form action="./controllers/updateMdp.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                <label for="mdp">Mot de passe :</label>
                <input type="text" name="mdp" value="<?= $_SESSION['password'] ?>">
                <input type="submit" value="U">
            </form>
            
            <form action="./controllers/updateChoice.php" method="POST" class="date_form">
            <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

                <label for="datezero">Date de départ :</label>
                <input type="text" name="datezero" value="<?= $_SESSION['datezero'] ?>">
            
                <label for="datefin">Date de fin :</label>
                <input type="text" name="datefin" value="<?= $_SESSION['datefin'] ?>">
        
                <label for="ami">Accompagnateurs :</label>
                <input type="number" name="ami" value="<?= $_SESSION['ami'] ?>">
                <input type="submit" value="U">
            </form>


            <form action="./controllers/deleteUser.php" method="POST">
                <label for="nom">Supprimer mon compte :</label>
                <input type="text" name="nom" value="<?= $_SESSION['nom'] ?>">
                <input type="submit" value="X">
            </form>

        </div>
    </div>

</main>

<?php require "./templates/footer.html"?>
</body>
</html>