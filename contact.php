<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <!-- bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
</head>


<body>

    <?php include "menu.php"?>
   

    <!-- Sign Up form   -->
    

    <section>
        <div class="contact-had">
            <h1>Contact Us</h1>

        </div>
        <form action="signup" method="post" class="mb-5 contacts-form">
            <div class="form-group">
                <label for="">Name:</label><input type="text" name="name" class="form-control" placeholder="enter your name" id="out-line">
            </div>
            <div class="form-group">
                <label for="">Email:</label><input type="text" name="email" class="form-control" placeholder="enter your email" id="out-line">
            </div>
            <div class="text-group mt-5">
                <textarea name="contact-message" id="c-message" cols="30" rows="10" placeholder="Message........"></textarea>
            </div>

            <button type="submit" name="submit" class="btn-form"> Submit</button>



        </form>
    </section>

    <?php include "footer.php"?>







    <!-- end carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>