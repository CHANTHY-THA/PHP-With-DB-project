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

    function login($value) {
        session_start();
        $username = trim($value['username']);
        $password = trim($value['password']);
        $users = getAllusers();

        foreach ($users as $user) {
        
        if(password_verify($password,trim($user['password'])) and $username === $user['username']) {

                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['role'];
                $_SESSION['message'] = "Login successful";
                header('Location: http://localhost/PHP_project/index.php?page=home');
        }else {
                $_SESSION['message'] = "Login is failed. Please try again";
                header("Location: http://localhost/PHP_project/index.php?page=login");
        }
        }
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: http://localhost/PHP_project/index.php?page=logout");
    }


    function Orders(){
        return db()->query("SELECT orders.orderid as 'orderid', customers.username as 'username',orderdate FROM customers 
        INNER JOIN orders ON orders.customerid = customers.customerid ORDER BY orders.orderid DESC");
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
        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        return db()->query("INSERT INTO products(image,productname,price,categoryid) VALUES ( '$image','$productname','$price','$category')");
    }
    function adduser($value){
        $username = trim($value['username']);
        $password = password_hash(trim($value['password']), PASSWORD_DEFAULT);
        $phone = $value['phone'];
        $country = $value['country'];
        $role = $value['role'];
        // echo $role;
        return db()->query("INSERT INTO customers(username,password,phone,country,role) 
        VALUES ('$username','$password','$phone','$country','$role')");
    }



    function orderProduct($id){
        $cusid = db()->query("SELECT customerid FROM customers ORDER BY customerid DESC LIMIT 1");
        $customerid = "";
        foreach($cusid as $row){
            $customerid = $row['customerid'];
        }
        
        return db()->query("INSERT INTO orders (customerid, productid) VALUES ('$customerid','$id')");
        
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
        $username = trim($value['username']);
        $password = password_hash(trim($value['password']), PASSWORD_DEFAULT);
        $phone = $value['phone'];
        $country = $value['country'];
        $role = $value['role'];
    $id = $value['id'];
    return db()->query("UPDATE customers
        SET username = '$username', password = '$password' , phone = '$phone' , country = '$country' , role = '$role'
        WHERE customerid = $id ");
    }

    function search($search){
        $productname = $search['search'];
        return db()->query("SELECT * FROM products WHERE productname LIKE '%$productname%' ");
    }

?>

