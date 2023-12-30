<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <!-- bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body style="background-image: url(./image/money.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;">

    <?php include "menu.php"; ?>
    <section class="mt-5">
        <h1 class="text-center">Fill Up payment</h1>
        <form action="signup" method="post" class="payment">
            <div class="form-group">
                <label for="" class="pay-label">Stripe Card Name :</label><input type="text" name="email" class="form-control Card" placeholder="Enter Your Strip Card Name">
            </div>

            <div class="form-group">
                <label for="" class="pay-label">Card Number:</label>
                <input type="text" name="mobile" class="form-control Card" placeholder="Enter Your Card number">
            </div>
            <div class="form-group">
                <label for="" class="pay-label">Expires:</label>
                <select name="month" id="month">
                    <option value="mm">MM</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                </select>
                <select name="year" id="YY">
                    <option value="YY">YY</option>
                    <option value="">2000</option>
                    <option value="">2001</option>
                    <option value="">2002</option>
                    <option value="">2003</option>
                    <option value="">2004</option>
                    <option value="">2005</option>
                    <option value="">2006</option>
                    <option value="">2007</option>
                    <option value="">2008</option>
                    <option value="">2009</option>
                    <option value="">2010</option>
                    <option value="">2011</option>
                    <option value="">2012</option>
                </select>
                <input type="text" name="CVC" placeholder="CVC" class="cvc">
            </div>


            <button type="submit" name="submit" class="btn-form"> Submit</button>

        </form>

    </section>








    <?php include "footer.php"; ?>
    <script src="js/script.js"></script>
    <!-- bootstrap   -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>