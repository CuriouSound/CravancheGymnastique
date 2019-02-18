<?php

$host = 'localhost';
	$db = '';
	$user ='';
	$pass = '';
	$charset = 'utf8mb4';

$bdd = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $bdd = new PDO($bdd, $user, $pass, $options);
}
catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}