<?php

include "config.php";
include "database.php";

$db = new database();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
    $query = "DELETE FROM product WHERE id = $id";
    $deleteData = $db->delete($query);
?>