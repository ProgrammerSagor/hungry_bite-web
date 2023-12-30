<?php 
    $message = "";
    session_start();
    if(isset($_POST['login']))  {
        $email = $_POST['email'];
        $password = $_POST['pass'];
    
        $conn = mysqli_connect('localhost','root','','login_db');
        $sql = "SELECT * FROM login WHERE email ='$email' AND password = '$password' ";
        $result = mysqli_query($conn,$sql);

        if($result->num_rows>0) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $password;
            header('location:index.php');
        }else{
            $message = "Email or Password invalid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap   -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
    <style>
        .sing {
            text-align: center;
            font-size: 55px;
            text-transform: uppercase;
            margin-top: 2rem;
        }

        .form-group {
            display: flex;
            max-width: 700px;
            margin: auto;
            margin-top: 1rem;
            border: 1px solid #ddd;
            padding: 8px;
            justify-content: center;
            align-items: center;
            grid-gap: 5px;
            border-radius: 5px;

        }


        .form-control {
            border: none;
        }

        .cpass {
            min-width: 20%;
        }

        form {
            text-align: center;
        }

        .btn-form {
            margin-top: 20px;
            font-size: 20px;
            font-family: initial;
            padding: 5px 30px;
            letter-spacing: 1px;
            background: #1c1;
            border-radius: 5px;
            border: none;
            color: #fff;
        }



        .rating {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        #text-aria {
            outline: none;
            background: #ddd;
            border: none;
            resize: none;
            padding: 10px;
        }

        .rating-select {
            margin-top: 15px;
        }

        .btn-submit {
            margin-top: 20px;
            font-size: 20px;
            font-family: initial;
            padding: 5px 30px;
            letter-spacing: 1px;
            background: cadetblue;
            border-radius: 5px;
            border: none;
            color: #fff;
        }

        #star {
            border: none;
            background: transparent;
            text-align: center;
        }
    </style>
</head>


<body>

    <?php include "menu.php" ?>

    <!-- Sign Up form   -->

    <section>
        <h1 class="sing">LOG IN</h1>
        <?php echo $message; ?>
        <form action="login" method="post" class="log-form">
            <div class="form-group">
                <label>Email:</label><input type="text" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label >password:</label>
                <input type="password" name="pass" class="form-control" placeholder="Enter your password">
            </div>
            <button type="submit" name="submit" class="btn-form" value="login"> LOGIN</button>
        </form>
    </section>

    <section class="rating">
        <h2>Review Website</h2>

        <div class="writng">
            <textarea name="comment" id="text-aria" cols="30" rows="5" placeholder="Enter your comment"></textarea>
            <div class="rating-select">
                <label for="">Rating</label>
                <select name="star" id="star">
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3">&#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
            </div>
            <button type="submit" name="rating-sub" class="btn-submit"> Submit</button>
        </div>

    </section>







    <!-- end carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>