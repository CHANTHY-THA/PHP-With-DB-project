<?php

function db() {
    return new mysqli('localhost','root','','khmer_shop');
}

function getproduct(){
    return db()->query("SELECT * FROM  products ORDER BY pro_id DESC ");
}
function getAllusers(){
    return db()->query("SELECT * FROM  customers ORDER BY customerid DESC ");
}
function Orders(){
    return db()->query("SELECT customers.firstname as 'firstname',customers.lastname as 'lastname',orderdate FROM  customers INNER JOIN orders ON orders.customerid = customers.customerid ");
}

function selectOneProduct($id) {
    return db()->query("SELECT * FROM products WHERE pro_id = $id");
}
// create product

function addproduct($image,$title,$price,$category){
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    return db()->query("INSERT INTO products(image,title,price,categoryid) VALUES ( '$image','$title','$price','$category')");
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

