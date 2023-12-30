<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track order</title>

    <!-- bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
</head>


<body>

    <?php include "menu.php" ?>


    <!-- Sign Up form   -->


    <section>
        <div class="contact-had mb-5" style="width: 100%;min-height: 15rem;	background-image: url(./image//track.jpg); background-repeat: no-repeat; background-position: center;background-size: cover; text-align: center; display: grid;justify-content: center;align-items: center;">
            <h1>Track Order</h1>

        </div>
        <div class="container track-had">

            <div class="track-left">
                <img class="img-thumbnail" src="image/12.png" alt="" width="100%">
            </div>
            <div class="track-right">
                <h6 class="p-title">Total Amount :<strong>11</strong> </h6>
                <h6 class="p-title">price/Product :<strong>$20</strong> </h6>
                <h6 class="p-title">Total Price : <strong>510</strong> </h6>
                <h6 class="p-title">Order status : <strong>Processing</strong> </h6>
            </div>

        </div>
    </section>

    <section>
        <div class="track-re">
            <h3 class="text-center mb-5">Review Product</h3>
            <div class="send-img m-auto text-center">

                <div class="Neon Neon-theme-dragdropbox mt-5">
                    <input style="z-index: 999; opacity: 0; width: 320px; height: 200px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="files[]" id="filer_input2" multiple="multiple" type="file">
                    <div class="Neon-input-dragDrop">
                        <div class="Neon-input-inner">
                            <div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div>
                            <div class="Neon-input-text">
                                <h3>Drag&amp;Drop Image here</h3> <span style="display:inline-block; margin: 15px 0">or</span>
                            </div><a class="Neon-input-choose-btn blue">Browse Files</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="writng text-center mt-5 mb-5">
                <textarea name="comment" id="text-aria" cols="30" rows="5" placeholder="Review.........." class="p-2 mb-5"></textarea>
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

        </div>
    </section>






    <?php include "footer.php" ?>
    <!-- end carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>