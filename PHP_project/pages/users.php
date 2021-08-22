
    <div class="d-flex justify-content-between p-2">
        <a href="index.php?page=orders" class="btn btn-danger">Ordered history</a>
        <a href="" class="btn btn-primary">User Login</a>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User name</th>
                    <th scope="col">password</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Country</th>
                    <th scope="col">Role</th>
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
                        <td><?=$row['username']?></td>
                        <td><?=$row['password']?></td>
                        <td><?=$row['phone']?></td>
                        <td><?=$row['country']?></td>
                        <td><?=$row['role']?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm mr-2">Disable</a>
                            <a href="edit_customer_html.php?id=<?=$row['customerid']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                            <a href="delete_customer.php?id=<?=$row['customerid']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>    
                        </td>
                    </tr>
                </tbody>
                
            <?php endforeach; ?>
        </table> 




