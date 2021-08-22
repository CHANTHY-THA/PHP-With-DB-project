

    <div class="container p-4 w-50 mt-5">
        <form method="POST" action="create_customer_model.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
               <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="phone" placeholder="phone number">
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="country" placeholder="country">
            </div>
            <input type="hidden" name="role" class="form-control" value="user">
            <div class="form-group">
                <input type="submit" class="btn btn-danger btn-block  ml" name="user" value="submit">
            </div>
           
        </form>
    </div>


