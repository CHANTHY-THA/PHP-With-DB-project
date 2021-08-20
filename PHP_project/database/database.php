<?php

function db() {
    return new mysqli('localhost','root','','khmer_shop');
}

// Get data from table ----------------------------------------------------

function getproduct(){
    return db()->query("SELECT * FROM  products ORDER BY pro_id DESC ");
}

function getproduct3(){
    return db()->query("SELECT * FROM  products ORDER BY pro_id DESC LIMIT 6");
}

function getAllusers(){
    return db()->query("SELECT * FROM  customers ORDER BY customerid DESC ");
}

function Orders(){
    return db()->query("SELECT orders.orderid as 'orderid', customers.name as 'name',orderdate FROM customers 
    INNER JOIN orders ON orders.customerid = customers.customerid");
}

// select one data from table -----------------------------------------------

function selectOneProduct($id) {
    return db()->query("SELECT * FROM products WHERE pro_id = $id");
}
function selectOnecustomer($id) {
    return db()->query("SELECT * FROM customers WHERE customerid = $id");
}

// create value into tables ------------------------------------------------------

function addproduct($image,$title,$price,$category){
    $image = $_FILES['image']['name'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    return db()->query("INSERT INTO products(image,title,price,categoryid) VALUES ( '$image','$title','$price','$category')");
}
function adduser($value){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    return db()->query("INSERT INTO customers(name,phone,email,country) VALUES ('$name','$phone','$email','$country')");
}
function orderProduct($id){
    echo $id;
    return db()->query("INSERT INTO orderproducts('productid') VALUES ($id");
    
}

// Delete data from table ---------------------------------------------------

function deleteproduc($id){
    return db()->query("DELETE FROM products WHERE pro_id = '$id' ");
}
function deleteCustomer($id){
    return db()->query("DELETE FROM customers WHERE customerid = '$id' ");
}
function deleteorder($id){
    return db()->query("DELETE FROM orders WHERE orderid = '$id' ");
}

// Update update data -----------------------------------------------------------

function updateProduct($value){
    $title = $value['title'];
    $price = $value['price'];
    $category = $value['category'];
    $id = $value['id'];
    return db()->query("UPDATE products SET title = '$title', price = '$price' , categoryid = '$category' WHERE pro_id = $id ");
}
function updateCustomer($value){
    $name = $value['name'];
    $email = $value['email'];
    $phone = $value['phone'];
    $country = $value['country'];
    $id = $value['id'];
    return db()->query("UPDATE customers SET  name = '$name',email = '$email',phone = '$phone',country = '$country' WHERE customerid = $id ");
}



?>

