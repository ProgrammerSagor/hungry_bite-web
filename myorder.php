<!DOCTYPE html>
<html lang="en">

<head>
    <meta chaTket="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Order</title>
    <!-- data table start -->
    <script src="js/datacdn.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- data table end -->
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/media.css">
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


        #myTable_length {
            display: none !important;

        }

        #myTable_filter {
            display: none !important;
        }

        td {
            border-right: 1px solid #000;
        }

        td:first-child {
            border-left: 1px solid #000;
        }

        #myTable_info {
            display: none !important;
        }

        #myTable_paginate {
            display: none !important;
        }

        .track-btn {
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
    </style>
</head>

<body>
    <section>
        <div class="contact-had">
            <h1>my order Us</h1>
        </div>

        <table id="myTable" class="table-responsive">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Cat</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Track</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><img src="image/sagor.jpg" alt="" width="50px"></td>
                    <td>sagor chandra das</td>
                    <td>2</td>
                    <td>$ 190</td>
                    <td>3</td>
                    <td><a href="#" class="track-btn">button</a></td>

                </tr>


            </tbody>
        </table>
    </section>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>