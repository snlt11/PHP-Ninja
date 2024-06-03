<?php

require_once('./vendor/autoload.php');

use App\Database;

$db = new Database();

$student = $db->update($_POST);

?>