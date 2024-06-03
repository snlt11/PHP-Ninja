<?php

namespace App;

use App\Student;

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database
{
    public function __construct()
    {
        $db = new DB;

        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'ninja',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);


        $db->setEventDispatcher(new Dispatcher(new Container));

        $db->setAsGlobal();

        $db->bootEloquent();
    }
    public function index()
    {
        return Student::all();
    }

    public function destroy($id)
    {
        $result = Student::destroy($id);

        if ($result) header("Location: index.php");
    }

    public function store($data)
    {
        $result = Student::create($data);

        if ($result) header("Location: index.php");
    }

    public function show($id)
    {
        return Student::find($id);
    }
    public function update($data)
    {
        $result = Student::where('id', $data['id'])->update($data);

        if ($result) header("Location: index.php");
    }
}
