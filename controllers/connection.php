<?php
session_start();

$users = 
[
    [
        'login' => '',
        'password' => ''
    ]
];

foreach ($users as $user) {
    if ( $_POST['login'] == $user['login'] && $_POST['password'] == $users['password']) {
         $_SESSION['login'] = $_POST['login'];
         header('Location: /');
         break;
    } else {
        header('Location: /login.php')
    }   
}