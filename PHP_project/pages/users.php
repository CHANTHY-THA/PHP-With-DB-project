<?php include_once('partial/header.php'); ?>

    <div class="d-flex justify-content-between p-2">
        <a href="index.php?page=orders" class="btn btn-danger">Ordered history</a>
        <a href="add_customer_html.php" class="btn btn-primary">+ Add customer</a>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
                
            <?php
                require_once('database/database.php');
                $result = getAllusers();
                foreach($result as $row):
            ?>
                <tbody>
                    <tr>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['country']?></td>
                        <td>
                            <a href="edit_customer_html.php?id=<?=$row['customerid']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                            <a href="delete_customer.php?id=<?=$row['customerid']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>    
                        </td>
                    </tr>
                </tbody>
                
            <?php endforeach; ?>
        </table> 
        
<?php require_once('partial/footer.php'); ?>



