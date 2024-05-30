<?php

require_once('./database/db.php');
$db = new DB();
$students = $db->destroy($_GET['id']);

?>