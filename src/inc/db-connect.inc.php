<?php

$pdo = new PDO('mysql:host=localhost;dbname=watchlist', 'root', 1234);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM movie");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);