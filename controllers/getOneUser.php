<?php

$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs WHERE id=:id');
$req->bindParam(':id', $_POST['id']);
$req->execute();
$user = $req->fetch(PDO::FETCH_ASSOC);