<?php

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();

$users = $req->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user) {
        session_start();
        $_SESSION['choix'] = $_POST['choix'];
        $_SESSION['datezero'] = $_POST['datezero'];
        $_SESSION['datefin'] = $_POST['datefin'];
        $_SESSION['ami'] = $_POST['ami'];
}

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('UPDATE utilisateurs SET choix=:choix, datezero=:datezero, datefin=:datefin, ami=:ami WHERE id=:id');

$req->bindParam(':choix', $_SESSION['choix']);
$req->bindParam(':datezero', $_SESSION['datezero']);
$req->bindParam(':datefin', $_SESSION['datefin']);
$req->bindParam(':ami', $_SESSION['ami']);

$req->bindParam(':id', $_SESSION['id']);

$req->execute();


header('Location: ../moncompte.php');
