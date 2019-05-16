<?php

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('UPDATE utilisateurs SET courriel=:courriel WHERE id=:id');

$req->bindParam(':courriel', $_POST['courriel']);
$req->bindParam(':id', $_POST['id']);

$req->execute();

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();

$users = $req->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user) {
        session_start();
        $_SESSION['courriel'] = $_POST['courriel'];
}


header('Location: ../moncompte.php');
