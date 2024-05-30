<?php
class DB
{
    protected $pdo;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=ninja', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        } catch (Exception $e) {
            die(var_dump($e->getMessage()));
        }
    }
    public function index()
    {
        $statement = $this->pdo->query("SELECT * FROM `students`");
        if ($statement) {
            $students = $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return $students;
    }
    public function store($data)
    {
        $statement = $this->pdo->prepare("INSERT INTO `students`(`name`,`email`,`gender`,`date_of_birth`,`age`) VALUES(:name, :email, :gender, :date_of_birth, :age)");
        $statement->bindParam(':name', $data['name']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':gender', $data['gender']);
        $statement->bindParam(':date_of_birth', $data['date_of_birth']);
        $statement->bindParam(':age', $data['age']);
        $result = $statement->execute();
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Data Not Inserted";
        }
    }
    public function show($id)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $this->pdo->prepare("SELECT * FROM `students` WHERE `id` = :id ");
        $statement->bindParam(':id', $id);
        $statement->execute();
        $student = $statement->fetch(PDO::FETCH_OBJ);
        return $student;
    }
    public function update($data)
    {
        $statement = $this->pdo->prepare("UPDATE `students` SET `name` = :name ,`email` = :email,`gender` = :gender,`date_of_birth` = :date_of_birth ,`age`=:age WHERE `id` = :id");
        $statement->bindParam(':id', $data['id']);
        $statement->bindParam(':name', $data['name']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':gender', $data['gender']);
        $statement->bindParam(':date_of_birth', $data['date_of_birth']);
        $statement->bindParam(':age', $data['age']);
        $result = $statement->execute();
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Data Not Inserted";
        }
    }
    public function destroy($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM `students` WHERE `id` = :id ");
        $statement->bindParam(':id', $id);
        $result = $statement->execute();
        if ($result) {
            header('Location:./index.php');
        } else {
            echo "Data Not Deleted";
        }
    }
}
