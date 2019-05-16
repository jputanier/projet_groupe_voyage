<?php

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('UPDATE utilisateurs SET datezero=:datezero, datefin=:datefin, ami=:ami WHERE id=:id');

$req->bindParam(':datezero', $_POST['datezero']);
$req->bindParam(':datefin', $_POST['datefin']);
$req->bindParam(':ami', $_POST['ami']);
$req->bindParam(':id', $_POST['id']);

$req->execute();

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();

$users = $req->fetchAll(PDO::FETCH_ASSOC);


foreach($users as $user) {
        session_start();
        $_SESSION['datezero'] = $user['datezero'];
        $_SESSION['datefin'] = $user['datefin'];
        $_SESSION['ami'] = $user['ami'];
}

header('Location: ../moncompte.php');
