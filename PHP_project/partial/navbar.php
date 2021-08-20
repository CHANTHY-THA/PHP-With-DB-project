<?php include_once('header.php') ?>
<!-- Image and text -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <img src="images/Tshop-logo.jpg" class="logo" alt="">
      <a href="" class="btn btn-success btn-sm mr-3 ml-5"><i class="fa fa-home"></i></a>
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <a class="navbar-brand " href="?page=home">Home</a>
        <li class="nav-item active">
          <a class="nav-link" href="?page=shop_now">Shop Now<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=users">User management</a>
        </li>
      
      
      </ul>

    </div>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="?page=contact_us">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=orders">Card</a>
      </li>
    </ul>
    
  </nav>

<?php include_once('footer.php') ?>

