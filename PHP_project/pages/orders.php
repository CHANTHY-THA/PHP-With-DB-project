
    <div class="d-flex justify-content-end p-2">
        <a href="" class="btn btn-primary">Order History</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Customer name</th>
                <th scope="col">Product name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Order Date</th>
                <th scope="col">Remove order</th>
            </tr>
        </thead>
                
        <?php
            require_once('database/database.php');
            $result = Orders();
            foreach($result as $row):
        ?>
        <tbody>
            <tr>
                <td><?=$row['username']?></td>
                <td>Testing</td>
                <td>Testing</td>
                <td><?=$row['orderdate']?></td>
                <td>
                <a href="delete_order.php?id=<?=$row['orderid']?>" class="btn btn-danger btn-sm">Delete</i></a>     
                </td>
            </tr>
        </tbody>      
        <?php endforeach; ?>
    </table> 



