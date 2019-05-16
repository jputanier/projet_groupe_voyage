<?php 
$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('SELECT * FROM utilisateurs');
$req->execute();
$users = $req->fetchAll(PDO::FETCH_ASSOC);
