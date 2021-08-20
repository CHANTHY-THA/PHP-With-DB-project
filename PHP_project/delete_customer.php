<?php
require_once('database/database.php');
$id = $_GET['id'];

$isDeleted = deleteCustomer($id);
if ($isDeleted) {
    header('Location: index.php?page=users') ;
}
