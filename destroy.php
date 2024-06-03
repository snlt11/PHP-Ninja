<?php

use App\Database;

require_once('./vendor/autoload.php');

$db = new Database;

$students = $db->destroy($_GET['id']);

?>