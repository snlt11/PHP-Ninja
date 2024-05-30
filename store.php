<?php
// die(var_dump($_POST));

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ninja', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("INSERT INTO `students`(`name`,`email`,`gender`,`date_of_birth`,`age`) VALUES(:name, :email, :gender, :date_of_birth, :age)");
    $statement->bindParam(':name', $_POST['name']);
    $statement->bindParam(':email', $_POST['email']);
    $statement->bindParam(':gender', $_POST['gender']);
    $statement->bindParam(':date_of_birth', $_POST['date_of_birth']);
    $statement->bindParam(':age', $_POST['age']);
    $result = $statement->execute();
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Data Not Inserted";
    }
} catch (PDOException $e) {
    die(var_dump($e->getMessage()));
} catch (Exception $e) {
    die(var_dump($e->getMessage()));
}
