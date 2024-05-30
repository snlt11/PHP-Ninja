<?php

require_once('./database/db.php');
$db = new DB();
$student = $db->update($_POST);

?>