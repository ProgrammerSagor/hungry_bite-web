<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <!-- bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
    <style>
        
    </style>
</head>


<body>

    <?php include "menu.php" ?>
    <!-- Sign Up form   -->

    <section>
        <h1 class="sing mb-5">Sign up</h1>
        <form action="" method="post" class="reform">
            <div class="form-group">
                <label for="">Email:</label><input type="text" name="email" class="form-control" placeholder="enter your email">
            </div>
            <div class="form-group">
                <label for="">mobile:</label>
                <input type="text" name="mobile" class="form-control" placeholder="enter your number">
            </div>
            <div class="form-group">
                <label for="">password:</label>
                <input type="password" name="pass" class="form-control" placeholder="enter your password">
            </div>
            <div class="form-group">
                <label for="" class="cpass">confirm password:</label>
                <input type="password" name="cpass" class="form-control" placeholder="enter your confirm password">
            </div>

            <button type="submit" name="submit" class="btn-form"> Submit</button>

            <p>already hare an account? <a href="login.php">Login host</a></p>


        </form>
    </section>







    <!-- end carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>