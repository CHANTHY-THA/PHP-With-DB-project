
<?php include_once('partial/header.php'); ?>
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/shop.jpg" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-md-block">
               <h5>Wlcome to T-shop</h5>
               <p>please wacht the picture and buy the products now</p>
               <div class="slider-btn">
                  <a class="btn btn-primary btn-1" href="?page=shop_now">Shop Now</a>
                  <a class="btn btn-danger btn-2" href="?page=home">Start your bussines</a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/clo.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
               <h5>Clothes shop</h5>
               <p>please wacht the picture and buy the Clothes now</p>
               <div class="slider-btn">
                  <a class="btn btn-primary btn-1" href="?page=shop_now">Shop Now</a>
                  <a class="btn btn-danger btn-2" href="?page=home">Start your bussines</a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/fo.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
               <h5>Food resturant </h5>
               <p>please wacht the picture and buy the Foods now</p>
               <div class="slider-btn">
                  <a class="btn btn-primary btn-1" href="?page=shop_now">Shop Now</a>
                  <a class="btn btn-danger btn-2" href="?page=home">Start your bussines</a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/banner.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
               <h5>Electronice</h5>
               <p>please wacht the picture and buy the products now</p>
               <div class="slider-btn">
                  <a class="btn btn-primary btn-1" href="?page=shop_now">Shop Now</a>
                  <a class="btn btn-danger btn-2" href="?page=home">Start your bussines</a>
               </div>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
   </div>
   <!-- // card  our product -->
   <h3 class="p-4">New Product</h3>
   <div class="container-fluid d-flex justify-content-around">
      <?php
         require_once('database/database.php');
         $result = getproduct3();
         foreach($result as $row):
      ?>
         <div class="card">
            <img src="images/<?=$row['image']?>" class="cagegory">
            <h5 style="text-align: center;"><?=$row['price']?>$</h>
            <p style="text-align: center"><?=$row['productname']?></p>
         </div>
      <?php endforeach;?>
   </div>
  
   <!-- // Outr products  -->
   <h3 class="p-4">Our Product</h3>
   <div class="shop p-4">
            <?php
                require_once('database/database.php');
                $result = getproduct();
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
                </div>
            <?php endforeach; ?>
        </div>
        <hr class="w-50 m-auto">
   <!-- // Footer -->
   <h3 class="p-4">My location</h3>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d977.2520564619016!2d104.88601282915336!3d11.551267313429584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzA0LjYiTiAxMDTCsDUzJzExLjYiRQ!5e0!3m2!1sen!2skh!4v1629361585404!5m2!1sen!2skh" width="800" height="350" style="border:0;margin-left:2% ;" allowfullscreen="" loading="lazy"></iframe>
   <footer style="background: gray;height:10vh;display:flex;align-items:center;padding-left:20px;margin-top:3%;">Creater by CHANTHY THA @student2021 WEB developer</footer>




