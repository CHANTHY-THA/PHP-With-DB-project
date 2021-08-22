<?php session_start() ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <img src="images/Tshop-logo.jpg" class="logo" alt="">
      <a href="" class="btn btn-success btn-sm mr-3 ml-5"><i class="fa fa-home"></i></a>
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php if (isset($_SESSION['username'])): ?>
        <a class="navbar-brand " href="?page=home">Home</a>
        <li class="nav-item active">
          <a class="nav-link" href="?page=shop_now">Shop Now<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Service</a>
        </li>
      <?php endif;?>
      </ul>

    </div>
    <?php if (isset($_SESSION['username'])): ?>
      <form method="POST" class="form-inline">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
      </form>
    <?php endif;?>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <?php if (isset($_SESSION['username'])): ?>
      <li class="nav-item active">
        <a class="nav-link" href="?page=logout">Logout</a>
      </li>
      <?php else: ?>
        <li class="nav-item active">
          <a class="nav-link" href="?page=login">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=sign_up">Create user</a>
        </li>
      <?php endif; ?>
     
      <?php if(isset($_SESSION['username'])): ?>
        <?php if($_SESSION['role'] == "Admin"): ?>
          <li class="nav-item active">
            <a class="nav-link" href="?page=users">Management</a>
          </li>
        <?php endif;?>
        <span class="navbar-text">
          <?=$_SESSION['username'] ?>
        </span>
      <?php endif;?>
    </ul>
    
  </nav>



