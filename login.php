<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connection</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php require_once './templates/header.php' ?>

        <div>
            <p>Pour vous connecter, essayé les logs suivants :</p>
                <table>
                    <tr>
                        <th>Login</th>
                        <th>Mot de passe</th>
                    </tr>
                </table>
        </div>

<br>
<form action="./controllers/connection.php" method="POST">
    <label for="login">Pseudo</label>
    <input type="text" name="login" >

    <label for="password">Mot de passe</label>
    <input type="password" name="password" >

    <input type="submit" value="Envoyer">
</form>
    <div>
        <h1>Voyage Voyages</h1>
        <div id="div_logo_user">
            <figure>
                <i class="fas fa-user logo_user"></i>
                <figcaption>Connection</figcaption>
            </figure>
        </div>
    </div>
    <nav>
        <p>Menu</p>
    </nav>
    <main>
    <div id="bloc_page">
        <div id="bloc1" class="font_kingthings"><a href="/" class="titles">New York<br/>City</a></div>
        <div id="bloc2" class="font_america"><a href="/" class="titles">* Beyrouth *</a></div>
        <div id="bloc3" class="font_desyrel"><a href="/" class="titles">San Francisco</a></div>
    </div>
    </main>
</body>
</html>