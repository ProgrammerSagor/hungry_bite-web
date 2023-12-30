<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my cart</title>
    <!-- data table start -->
    <script src="js/datacdn.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- data table end -->
    <link rel="stylesheet" href="css/sign.css">
    <!-- bootstrap   -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <script>
        $(document).ready(function() {
            $("#myTable").dataTable();
        });
    </script>
    <style>
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <section>
        <div class="contact-had">
            <h1>my cart</h1>
        </div>

        <table id="myTable" class="table-responsive">
            <thead>
                <tr>
                    <th>image</th>
                    <th>prod name</th>
                    <th>Cat</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>view</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><img src="image/12.png" alt="" width="50px"></td>
                    <td>burger</td>
                    <td>fast food</td>
                    <td>$ 90</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/17.png" alt="" width="50px"></td>
                    <td>Veggie-lant Burger </td>
                    <td>fast food</td>
                    <td>$ 85</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/28.png" alt="" width="50px"></td>
                    <td>The Buddha Burger </td>
                    <td>fast food</td>
                    <td>$ 80</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/3.png" alt="" width="50px"></td>
                    <td>Gentle Burger </td>
                    <td>fast food</td>
                    <td>$ 75</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/36.png" alt="" width="50px"></td>
                    <td>Chia Burgers </td>
                    <td>fast food</td>
                    <td>$ 70</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/37.png" alt="" width="50px"></td>
                    <td>Herbivore Burger </td>
                    <td>fast food</td>
                    <td>$ 75</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/38.png" alt="" width="50px"></td>
                    <td>Hearty Burger </td>
                    <td>fast food</td>
                    <td>$ 80</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/39.png" alt="" width="50px"></td>
                    <td>Veggie Grill Burger </td>
                    <td>fast food</td>
                    <td>$ 30</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/39.png" alt="" width="50px"></td>
                    <td>Green Affair </td>
                    <td>fast food</td>
                    <td>$ 20</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/40.png" alt="" width="50px"></td>
                    <td>The Burger Field </td>
                    <td>fast food</td>
                    <td>$ 40</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/41.png" alt="" width="50px"></td>
                    <td>Sunflower Bun </td>
                    <td>fast food</td>
                    <td>$ 30</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/42.png" alt="" width="50px"></td>
                    <td>Native Bun </td>
                    <td>fast food</td>
                    <td>$ 35</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/43.png" alt="" width="50px"></td>
                    <td>burgerLotus Burger </td>
                    <td>fast food</td>
                    <td>$ 55</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/44.png" alt="" width="50px"></td>
                    <td>Veganic Bun </td>
                    <td>fast food</td>
                    <td>$ 20</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/45.png" alt="" width="50px"></td>
                    <td>Forever Vegan Bun </td>
                    <td>fast food</td>
                    <td>$ 25</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/46.png" alt="" width="50px"></td>
                    <td>Green Leaves Burger </td>
                    <td>fast food</td>
                    <td>$ 35</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/47.png" alt="" width="50px"></td>
                    <td>Veggie Burgeryard </td>
                    <td>fast food</td>
                    <td>$ 15</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/48.png" alt="" width="50px"></td>
                    <td>Great Choice Buns </td>
                    <td>fast food</td>
                    <td>$ 100</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/49.png" alt="" width="50px"></td>
                    <td>Organic Buns </td>
                    <td>fast food</td>
                    <td>$ 11</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/50.png" alt="" width="50px"></td>
                    <td>Mega Cheesy Nacho Delight</td>
                    <td>fast food</td>
                    <td>$ 29</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/10.png" alt="" width="50px"></td>
                    <td>Double Bacon</td>
                    <td>fast food</td>
                    <td>$ 18</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/11.png" alt="" width="50px"></td>
                    <td>Zesty Jalapeño</td>
                    <td>fast food</td>
                    <td>$ 79</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/12.png" alt="" width="50px"></td>
                    <td>Popper Bites</td>
                    <td>fast food</td>
                    <td>$ 71</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/13.png" alt="" width="50px"></td>
                    <td>Supreme Taco</td>
                    <td>fast food</td>
                    <td>$ 22</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/14.png" alt="" width="50px"></td>
                    <td>Fiesta Box</td>
                    <td>fast food</td>
                    <td>$ 12</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/15.png" alt="" width="50px"></td>
                    <td>Crispy Chicken</td>
                    <td>fast food</td>
                    <td>$ 35</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/16.png" alt="" width="50px"></td>
                    <td>Wafflewich</td>
                    <td>fast food</td>
                    <td>$ 60</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>
                <tr>
                    <td><img src="image/17.png" alt="" width="50px"></td>
                    <td>Buffalo Ranch Chicken Sl</td>
                    <td>fast food</td>
                    <td>$ 54</td>
                    <td>5 star</td>
                    <td><a href="#">prod page</a></td>

                </tr>

            </tbody>
        </table>
    </section>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>