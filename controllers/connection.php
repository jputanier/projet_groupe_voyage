<?php
$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();
$users = $req->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user) {
    if ($user['courriel'] == $_POST['courriel'] && $user['mdp'] == $_POST['password']) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['courriel'] = $_POST['courriel'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['choix'] = $user['choix'];
        $_SESSION['datezero'] = $user['datezero'];
        $_SESSION['datefin'] = $user['datefin'];
        $_SESSION['ami'] = $user['ami'];

    } else {
        header('Location: /test.php');
    }
}

header('Location: /index.php');
