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
                <form action="./store.php" method="post">
                    <h3 class="text-center">Create New Student</h3>
                    <div class="mb-2">
                        <label for="name" class="form-label">name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-2">
                        <label for="gender" class="form-label">Choose Your Gender</label>
                        <select name="gender" class="form-select" id="gender">
                            <option value="" selected disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="date_of_birth" class="form-label" required>Choose Your Birthday</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth">
                    </div>
                    <div class="mb-2">
                        <label for="age" class="form-label" required>Choose Your Birthday</label>
                        <input type="number" name="age" class="form-control" id="age">
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Create New Student</button>
                        <a href="./index.php" class="btn btn-warning">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>