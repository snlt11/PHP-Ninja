<?php
// die(var_dump($_GET));
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ninja', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("DELETE FROM `students` WHERE `id` = :id ");
    $statement->bindParam(':id', $_GET['id']);
    $result = $statement->execute();
    if ($result) {
        header('Location:./index.php');
    } else {
        echo "Data Not Deleted";
    }
} catch (PDOException $e) {
    die(var_dump($e->getMessage()));
} catch (Exception $e) {
    die(var_dump($e->getMessage()));
}
