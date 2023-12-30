<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungry Bite</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/media.css">
    <!-- carousel -->

</head>


<body>

    <?php include "menu.php"?>
       

    <!-- carousel   -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/c1.jpg" alt="Los Angeles" width="100%" >
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c2.jpg" alt="Chicago" width="100%" >
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c3.jpg" alt="New York" width="100%" >
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c4.jpg" alt="New York" width="100%" >
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c5.jpg" alt="New York" width="100%" >
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"><i class="fa-solid fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"><i class="fa-solid fa-angle-right"></i></span>
        </a>
    </div>

    <section class="categories">
        <div class="container mt-5">
            <span class="title-cat">Categoriesories</span>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mt-2 food">
                    <a href="#">
                        <div class="categories-item">
                            <div class="image-cat">
                                <img src="image/10.png" alt="">
                            </div>
                            <div class="cat-title">
                                <p>Comfort Food Classics</p>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-2 food">
                    <a href="#">
                        <div class="categories-item">
                            <div class="image-cat">
                                <img src="image/11.png" alt="">
                            </div>
                            <div class="cat-title">
                                <p>Cheeseburger</p>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-2 food">
                    <a href="#">
                        <div class="categories-item">
                            <div class="image-cat">
                                <img src="image/12.png" alt="">
                            </div>
                            <div class="cat-title">
                                <p>Sandwich</p>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-2 food">
                    <a href="#">
                        <div class="categories-item">
                            <div class="image-cat">
                                <img src="image/13.png" alt="">
                            </div>
                            <div class="cat-title">
                                <p>Milkshake</p>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="toggle-head" id="toggle">
                <div class="row mt-1">
                    <div class="col-lg-3 col-md-6 mt-2 food">
                        <a href="#">
                            <div class="categories-item">
                                <div class="image-cat">
                                    <img src="image/14.png" alt="">
                                </div>
                                <div class="cat-title">
                                    <p>Muffin</p>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 food">
                        <a href="#">
                            <div class="categories-item">
                                <div class="image-cat">
                                    <img src="image/10.png" alt="">
                                </div>
                                <div class="cat-title">
                                    <p>Burrito</p>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 food">
                        <a href="#">
                            <div class="categories-item">
                                <div class="image-cat">
                                    <img src="image/15.png" alt="">
                                </div>
                                <div class="cat-title">
                                    <p>Taco</p>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-2 food">
                        <a href="#">
                            <div class="categories-item">
                                <div class="image-cat">
                                    <img src="image/16.png" alt="">
                                </div>
                                <div class="cat-title">
                                    <p>Hot dog</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <button class="btn btn-dark text-center mt-4" onclick="myFunction()">View All</button>
        </div>
    </section>


    <section class="categories">
        <div class="container mt-5 mb-5">
            <span class="title-cat">HOT DEALS</span>
            <div class="ready mt-4">
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/2.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Crispy Duo Box</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/3.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Zinger Stacker Combo</p>
                                <span>1 Zinger Stacker + 1 Regular fries + 1 Regular drink </span>
                                <p class="deal">Tk 850</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/4.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Twister Combo</p>
                                <span>Twister + 1 Regular fries + 1 Regular drink </span>
                                <p class="deal">Tk 670</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/5.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Family Festival 3</p>
                                <span>An ultimate meal </span>
                                <p class="deal">Tk 650</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/6.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Krunch Combo</p>
                                <span> Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/7.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Wings Bucket</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/12.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Crispy Duo Box</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/9.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">chiken burger</p>
                                <span>Turn up the fun with </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/10.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">chiken chap</p>
                                <span>ge fries + 2 </span>
                                <p class="deal">Tk 150</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/11.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">matton kabab</p>
                                <span>1 Large fries + 2 </span>
                                <p class="deal">Tk 950</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        </div>
        </div>
    </section>



    <section class="most-new">
        <div class="container mt-5 mb-5">
            <span class="title-cat">MOST NEW</span>
            <div class="ready mt-4">
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/13.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Crispy Duo Box</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/14.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Zinger Stacker Combo</p>
                                <span>1 Zinger Stacker + 1 Regular fries + 1 Regular drink </span>
                                <p class="deal">Tk 850</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/15.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Twister Combo</p>
                                <span>Twister + 1 Regular fries + 1 Regular drink </span>
                                <p class="deal">Tk 670</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/16.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Family Festival 3</p>
                                <span>An ultimate meal </span>
                                <p class="deal">Tk 650</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/17.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Krunch Combo</p>
                                <span> Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/18.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Wings Bucket</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy Chicken + 1 Large fries + 2 </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/19.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">Crispy Duo Box</p>
                                <span>Turn up the fun with 5 pcs Hot & Crispy </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/20.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">chiken burger</p>
                                <span>Turn up the fun with </span>
                                <p class="deal">Tk 1250</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/21.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">chiken chap</p>
                                <span>ge fries + 2 </span>
                                <p class="deal">Tk 150</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hot-item">
                    <a href="#">
                        <div class="deals-item">
                            <div class="image-cat">
                                <img src="image/22.png" alt="">
                            </div>
                            <div class="deal-title">
                                <p class="deal">matton kabab</p>
                                <span>1 Large fries + 2 </span>
                                <p class="deal">Tk 950</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        </div>
        </div>
    </section>


    <section>
        <h1 class="happy">Happy Clients</h1>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="review-card">
                        <div class="reting-img"><img src="image1/m1.jpg" alt="fhghs" width="100%
                        " height="100%"></div>
                        <h2>Emad khan Doe</h2>
                        <p class="review-text">"I am extremely happy with the service provided. The team was professional, efficient, and friendly. I highly recommend their services."</p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="review-card">
                        <div class="reting-img"><img src="image1/m2.jpg" alt="fhghs" width="100%
                        " height="100%"></div>
                        <h2>Fihad Doe</h2>
                        <p class="review-text">"I am extremely happy with the service provided. The team was professional, efficient, and friendly. I highly recommend their services."</p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="review-card">
                        <div class="reting-img"><img src="image1/m3.jpg" alt="fhghs" width="100%
                        " height="100%"></div>
                        <h2>Chakma khan</h2>
                        <p class="review-text">"I am extremely happy with the service provided. The team was professional, efficient, and friendly. I highly recommend their services."</p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
            </a>


        </div>
    </section>

    <?php include "footer.php"?>



    <!-- custom jequary   -->
    <script src="js/script.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- carousel  -->


    <!-- end carousel -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>