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

<body style="background-image: url(./image/bg-2.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;">

    <?php include "menu.php"; ?>
    <section>
        <h1 class="text-center mt-5">Title of the food name</h1>
        <div class="phad">
            <div class="pleft">
                <div class="option-img">
                    <div class="prod-img">
                        <div id="London" class="tabcontent alys">
                            <img src="image/40.png" alt="" width="100%">
                        </div>

                        <div id="Paris" class="tabcontent">
                            <img src="image/41.png" alt="" width="100%">
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <img src="image/15.png" alt="" width="100%">
                        </div>

                        <div id="bangla" class="tabcontent">
                            <img src="image/43.png" alt="" width="100%">
                        </div>
                        <div id="urdo" class="tabcontent">
                            <img src="image/44.png" alt="" width="100%">
                        </div>
                        <div id="canada" class="tabcontent">
                            <img src="image/45.png" alt="" width="100%">
                        </div>
                        <div id="india" class="tabcontent">
                            <img src="image/46.png" alt="" width="100%">
                        </div>
                    </div>

                    <div class="show-img">
                        <div class="tablinks" onclick="openCity(event, 'London')">
                            <img src="image/40.png" alt="" width="100%">
                        </div>

                        <div class="tablinks" onclick="openCity(event, 'Paris')">
                            <img src="image/41.png" alt="" width="100%">
                        </div>

                        <div class="tablinks" onclick="openCity(event, 'Tokyo')">
                            <img src="image/15.png" alt="" width="100%">
                        </div>

                        <div class="tablinks" onclick="openCity(event, 'bangla')">
                            <img src="image/43.png" alt="" width="100%">
                        </div>

                        <div class="tablinks" onclick="openCity(event, 'urdo')">
                            <img src="image/44.png" alt="" width="100%">
                        </div>

                        <div class="tablinks" onclick="openCity(event, 'canada')">
                            <img src="image/45.png" alt="" width="100%">
                        </div>
                        <div class="tablinks" onclick="openCity(event, 'india')">
                            <img src="image/46.png" alt="" width="100%">
                        </div>

                    </div>
                </div>
                <div class="btn-had">
                    <a href="#" id="add">Add To Cart</a>
                    <a href="#" id="Order">Order Now</a>
                </div>
            </div>
            <div class="pright">
                <h6 class="p-title">Category Name <strong>burger</strong> </h6>
                <h6 class="p-title">Price :<strong>$20</strong> </h6>
                <h6 class="p-title">Total sold : <strong>510</strong> </h6>
                <h6 class="p-title mb-5">Delivary Time : <strong>50min</strong> </h6>
                <h6 class="p-title mt-5">Descripssion : <span class="tdesign">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro aperiam libero incidunt, qui ullam placeat labore iusto inventore totam commodi delectus dolorem doloribus sunt quibusdam neque repellat sit ipsa nobis tenetur numquam! Esse tempore.</span></h6>
            </div>
        </div>
    </section>

    <section>
        <div class="slider-container">
            <div class="slides">
                <div class="slide">
                    <div class="product-review">
                        <div class="pro-review-box">
                            <div class="pro-reting-img">
                                <img src="image/sagor.jpg" alt="fhghs" width="100%" height="100%">
                            </div>
                            <h2>Sagor chandra das</h2>
                        </div>
                        <p class="review-text">"I am extremely happy with the service provided. The team was professional, efficient, and friendly.</p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="product-review">
                        <div class="pro-review-box">
                            <div class="pro-reting-img">
                                <img src="image/emad.jpg" alt="fhghs" width="100%" height="100%">
                            </div>
                            <h2>Emad khan</h2>
                        </div>
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

                <div class="slide">
                    <div class="product-review">
                        <div class="pro-review-box">
                            <div class="pro-reting-img">
                                <img src="image1/m1.jpg" alt="fhghs" width="100%" height="100%">
                            </div>
                            <h2>abul kalam fihad</h2>
                        </div>
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
                <!-- Add more slides as needed -->
            </div>
            <span class="prev" onclick="prevSlide()">&#10094;</span>
            <span class="next" onclick="nextSlide()">&#10095;</span>
        </div>
    </section>








    <?php include "footer.php"; ?>

    <script src="js/script.js"></script>
    <!-- bootstrap   -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>