<?php

namespace App;


use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database
{
    protected $db;
    public function __construct()
    {
        $this->db = new DB;

        $this->db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'ninja',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);


        $this->db->setEventDispatcher(new Dispatcher(new Container));

        $this->db->setAsGlobal();

        $this->db->bootEloquent();
    }
    public function index()
    {
        return $this->db->table('students')->get();
    }

    public function destroy($id)
    {
        $result = $this->db->table('students')->where('id', $id)->delete();
        if ($result) {
            header("Location: index.php");
        }
    }

    public function store($data)
    {
        $student = $this->db->table('students')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
            'age' => $data['age'],
        ]);
        if ($student) {
            header("Location: index.php");
        } else {
            echo "Data Not Inserted";
        }
    }

    public function show($id)
    {
        return $this->db->table('students')->where('id', $id)->first();
    }
    public function update($data)
    {
        $result = $this->db->table('students')->where('id', $data['id'])->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
            'age' => $data['age'],
        ]);
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Data update failed";
        }
    }
}
