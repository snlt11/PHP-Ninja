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
    <div class="container col-6 mt-5">
        <div class="row">
            <div class="">
                <form action="./update.php" method="post">
                    <h3 class="text-center">Update Student</h3>
                    <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                    <div class="mb-2">
                        <label for="name" class="form-label">name</label>
                        <input type="text" name="name" value="<?php echo $student->name ?>" class="form-control" id="name">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" value="<?php echo $student->email ?>" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="gender" class="form-label">Choose Your Gender</label>
                        <select name="gender" class="form-select" id="gender">
                            <option value="male" <?php if ($student->gender == 'male') echo "selected" ?>>Male</option>
                            <option value="female" <?php if ($student->gender == 'female') echo "selected" ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="date_of_birth" class="form-label">Choose Your Birthday</label>
                        <input type="date" name="date_of_birth" value="<?php echo $student->date_of_birth ?>" class="form-control" id="date_of_birth">
                    </div>
                    <div class="mb-2">
                        <label for="age" class="form-label">Choose Your Birthday</label>
                        <input type="number" name="age" value="<?php echo $student->age ?>" class="form-control" id="age">
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="./index.php" class="btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>