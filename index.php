<?php

use App\Database;

require_once('./vendor/autoload.php');

$db = new Database;

$students = $db->index();

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
    <div class="container col-8 mt-5">
        <a href="./create.php" class="btn btn-primary">Create New Student</a>
        <div class="row">
            <div class="mt-5">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Age</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($students) : ?>
                            <?php foreach ($students as $student) : ?>
                                <tr>
                                    <th><?php echo $student->id ?></th>
                                    <th><?php echo $student->name ?></th>
                                    <th><?php echo $student->email ?></th>
                                    <th><?php echo $student->gender ?></th>
                                    <th><?php echo $student->date_of_birth ?></th>
                                    <th><?php echo $student->age ?></th>
                                    <td>
                                        <a href="show.php?id=<?php echo $student->id ?>" class="btn btn-primary">Details</a>
                                        <a href="destroy.php?id=<?php echo $student->id ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="7" class="text-center">No Data Found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>