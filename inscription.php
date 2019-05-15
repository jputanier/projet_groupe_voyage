<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connection</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="text-center headeR">
            <img src="./img/logo-voayaj.png" alt="logo voayaj">
        </div>
    </header>
    <?php require_once './templates/header.php' ?>
<div id="div_login">
    <form action="./controllers/connection.php" method="POST" id="form_login">
        <label for="login">Pseudo</label>
        <input type="text" name="login" >

        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        
        <label for="mail">E-mail</label>
        <input type="mail" name="mail">

        <input type="submit" value="Envoyer">
    </form>
</div>
</body>
</html>