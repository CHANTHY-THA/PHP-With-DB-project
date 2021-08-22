
    <div class="container-fluid p-4">
        <div class="manu d-flex justify-content-between">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Short by category</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Clothes</a>
                    <a class="dropdown-item" href="#">Food</a>
                    <a class="dropdown-item" href="#">Electronice</a>
                </div>
            </div>
            <?php if($_SESSION['role'] == "Admin"):?>
                <div class="p-2">
                    <a href="create_html.php" class="btn btn-primary">+ Add product</a>
                </div>
            <?php endif;?>
        </div>
       
        <h4 id="clothes">Our products</h4>
        <div class="shop p-4">
            <?php
                require_once('database/database.php');
                $result = "";
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $result = search($_POST);
                }else{
                    $result = getproduct();
                }
                
                foreach($result as $row):
                    
            ?>
                <div class="images">
                    <div class="card">
                        <img class="img" src="images/<?=$row['image']?>">
                        <p class="p-2"><?=$row['productname']?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="ml-2"><?=$row['price']."$"?></h3>
                            <p class="mr-2"><?=$row['postDate']?></p>
                        </div>
                        
                    </div>
            
                    <div class="action d-flex mt-3">
                        <a href="buy_model.php?id=<?=$row['pro_id'] ?>" class="btn btn-success btn-sm mr-2">Buy Now</i></a>
                        <?php if($_SESSION['role'] == "Admin"):?>
                            <a href="edit_html.php?id=<?=$row['pro_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                            <a href="delete_model.php?id=<?=$row['pro_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    
    <!-- end div -->
    </div>

    <footer style="background: gray;height:10vh;display:flex;align-items:center;padding-left:20px;margin-top:3%;">Creater by CHANTHY THA @student2021 WEB developer</footer>





