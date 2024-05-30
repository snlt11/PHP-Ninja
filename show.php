<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ninja', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("SELECT * FROM `students` WHERE `id` = :id ");
    $statement->bindParam(':id', $_GET['id']);
    $statement->execute();
    $student = $statement->fetch(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    die(var_dump($e->getMessage()));
} catch (Exception $e) {
    die(var_dump($e->getMessage()));
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Ninja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-4 mt-5">
        <div class="">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h2 class="card-title text-center">Student Info</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ID : <?php echo $student->id ?></li>
                        <li class="list-group-item">Name : <?php echo $student->name ?></li>
                        <li class="list-group-item">Email : <?php echo $student->email ?></li>
                        <li class="list-group-item">Gender : <?php echo $student->gender ?></li>
                        <li class="list-group-item">Date Of Birth : <?php echo $student->date_of_birth ?></li>
                        <li class="list-group-item">Age : <?php echo $student->age ?></li>

                    </ul>
                </div>
                <div class="card-footer">
                    <a href="edit.php?id=<?php echo $student->id ?> " class="btn btn-primary">Edit</a>
                    <a href="index.php" class="btn btn-warning">Cancel</a>
                    <a href="destroy.php?id=<?php echo $student->id ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>