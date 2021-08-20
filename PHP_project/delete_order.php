<?php
require_once('database/database.php');
$id = $_GET['id'];

$isDeleted = deleteorder($id);
if ($isDeleted) {
    header('Location: index.php?page=orders') ;
}