<?php


use App\Database;

require_once('./vendor/autoload.php');

$db = new Database;

$test = $db->store($_POST);

?>