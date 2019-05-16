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
    <title>VOAYAJ, voyager autrement</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="text-center headeR">
            <img src="./img/logo-voayaj.png" alt="logo voayaj">
        </div>
        <?php if(isset($_SESSION['courriel'])): ?>
                    <div id="div_logo_user"><a href="./moncompte.php">
                        <figure>
                            <i class="fas fa-user-cog logo_user"></i>
                            <figcaption>Mon compte</figcaption>
                        </figure></a>
                    </div> 
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
        
    </div>
    <!-- nav-bar -->
    <?php require "./templates/header.html"?>
    <!-- main -->
    <main>
        <div id="bloc_page">
            <div id="bloc1" class="font_kingthings"><a href="./contenunewyork.php" class="titles">New York<br/>City</a></div>
            <div id="bloc2" class="font_america"><a href="./contenubeyrouth.php" class="titles">* Beyrouth *</a></div>
            <div id="bloc3" class="font_desyrel"><a href="./contenusanfrancisco.php" class="titles">San Francisco</a></div>
        </div>
    </main>
    <!-- footer -->
    <?php require "./templates/footer.html"?>
    <!-- jquery popper bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>