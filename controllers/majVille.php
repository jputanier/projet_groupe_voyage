<?php
$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('UPDATE utilisateurs SET choix=:choix WHERE id=:id');

$req->bindParam(':choix', $_POST['choix']);
$req->bindParam(':id', $_POST['id']);
$req->execute();

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();

$users = $req->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user) {
        session_start();
        $_SESSION['choix'] = $_POST['choix'];
}

header('Location: ../moncompte.php');
