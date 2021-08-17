<?php
require_once('database/database.php');
$id = $_GET['id'];

$isDeleted = deleteproduc($id);
// $Edit = updateItems($id);
if ($isDeleted) {
    header('Location: index.php?page=shop_now') ;
}
