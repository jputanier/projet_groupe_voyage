<?php 
$pdo = new PDO('mysql:host=localhost; dbname=voyage; charset=utf8', 'root', '0000');
$req = $pdo->prepare('INSERT INTO utilisateurs(nom, mdp, courriel, choix, datezero, datefin, ami) VALUES (:nom, :mdp, :courriel, :choix, :datezero, :datefin, :ami)');
$req->bindParam(':nom', $_POST['nom']);
$req->bindParam(':mdp', $_POST['mdp']);
$req->bindParam(':courriel', $_POST['courriel']);
$req->bindValue(':choix', 0);
$req->bindValue(':datezero', 0);
$req->bindValue(':datefin', 0);
$req->bindValue(':ami', 0);



$req->execute();

header('Location: /');
