<?php 
include __DIR__ . '/./db-connect.inc.php';

$stmt_delete = $pdo->prepare('DELETE FROM movie WHERE id = :id');
$stmt_delete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt_delete->execute();

header('Location: ../Views/list.php');
exit();
                
