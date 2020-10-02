<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Simulator</title>
    <meta charset="utf-8">
    <meta name="application-name" content="Prove03">
    <meta name="description" content="Create a simple PHP application to simulate a shopping cart.">
    <meta name="img" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--google fonts: nanum gothic-->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="prove03.css">
    <script src="prove03.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top scrolled">
            <div class="container">
                <a class="navbar-brand" href="prove03.php">Undiscovered Beauty</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-sm-auto float-right text-right">
                        <li class="nav-item dropdown mx-2">
                            <button class="btn btn-outline-success dropdown-toggle my-2 my-sm-0" type="button" href="#"
                                id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                View Cart<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-cart" role="menu">
                                <li class="text-center">Your Shopping Cart</li>
                                <hr />
                                <li id="item"> <?php include 'addItem.php' ?>
                                </li>
                                <hr />
                                <li class="text-center"><a href="checkout.php"><button type="button" class="btn btn-success">Checkout</button></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    

    <section class="product" id="products">
        <div class="container height75p">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <h2>Products</h2>
                        <p>Please browse our wares</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://www.pxfuel.com/en/free-photo-jcrci-->
                        <div class="imgBox"><img src="images/bathbomb.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$6.99</h1>
                            <h1>
                                <p><s>$9.99</s></p>
                            </h1>
                            <p>Bath Bomb</p>
                            <button type="button" class="btn mybtn" onclick="addItem(1)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://www.perpetualkid.com/relax-baby-amethyst-shower-fizz/-->
                        <div class="imgBox"><img src="images/showerfizz.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$7.95</h1>
                            <h1>
                                <p><s>$8.95</s></p>
                            </h1>
                            <p>Shower Fizz</p>
                            <button type="button" class="btn mybtn" onclick="addItem(2)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://pixabay.com/photos/bath-salt-spa-bath-beauty-body-4676614/-->
                        <div class="imgBox"><img src="images/bathsalts.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$12.95</h1>
                            <h1>
                                <p><s></br></s></p>
                            </h1>
                            <p>Bath Salt</p>
                            <button type="button" class="btn mybtn" onclick="addItem(3)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://www.pxfuel.com/en/free-photo-jcrci-->
                        <div class="imgBox"><img src="images/lotion.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$7.99</h1>
                            <h1>
                                <p><s>$9.45</s></p>
                            </h1>
                            <p>Lotion</p>
                            <button type="button" class="btn mybtn" onclick="addItem(4)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://www.wholesalesuppliesplus.com/products/cashmere-pear-body-whip-lotion-making-kit.aspx-->
                        <div class="imgBox"><img src="images/bodywhip.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$9.95</h1>
                            <h1>
                                <p><s></br></s></p>
                            </h1>
                            <p>Body Whip</p>
                            <button type="button" class="btn mybtn" onclick="addItem(5)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productSnip">
                        <!--Image from https://www.pxfuel.com/en/free-photo-ichcy-->
                        <div class="imgBox"><img src="images/massagebar.jpg" class="img-fluid"></div>
                        <div class="content">
                            <h1>$11.19</h1>
                            <h1>
                                <p><s></br></s></p>
                            </h1>
                            <p>Massage Bar</p>
                            <button type="button" class="btn mybtn" onclick="addItem(6)">Add to Cart</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Joshua Mathews | cse341</p>
        </div>
    </footer>

    <!--Bootstrap dependancies-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    
    <script>
        function addItem(str) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("item").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "addItem.php?q=" + str, true);
            xhttp.send();
            // location.reload();
        }
    </script>

</body>

</html>