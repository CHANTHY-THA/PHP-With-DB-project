<?php

function db() {
    return new mysqli('localhost','root','','khmer_shop');
}

function getproduct(){
    return db()->query("SELECT * FROM  products ORDER BY pro_id DESC ");
}

function selectOneProduct($id) {
    return db()->query("SELECT * FROM products WHERE pro_id = $id");
}
// create product

function addproduct($image,$text,$price){
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    return db()->query("INSERT INTO products(image,title,price) VALUES ( '$image','$title','$price')");
}

// Delete product 
function deleteproduc($id){
    return db()->query("DELETE FROM products WHERE pro_id = '$id' ");
}

// Update product

function updateProduct($value){
    $title = $value['title'];
    $price = $value['price'];
    $id = $value['id'];
    return db()->query("UPDATE products SET title = '$title', price = '$price' WHERE pro_id = $id ");
}

