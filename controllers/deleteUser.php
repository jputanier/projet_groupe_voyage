<?php 
$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('DELETE FROM utilisateurs WHERE nom= :nom');
$req->bindParam(':nom', $_POST['nom']);
$req->execute();

session_start();
session_destroy();
header('Location: /');