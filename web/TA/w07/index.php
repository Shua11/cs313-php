<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}

$shoppingList=array();
$_SESSION['cart']=$shoppingList;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Undiscovered Beauty</title>
    <meta charset="utf-8">
    <meta name="application-name" content="Project1">
    <meta name="description" content="Create a robust shopping web application.">
    <meta name="img" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--google fonts: nanum gothic-->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- <script src="project.js"></script> -->
    <!-- <script>
        function add() 
        {
            var productName = event.target.name;
            var xhttp;
            xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                display(this);
                }
            };
            xhttp.open("GET", productName, true);
            xhttp.send();
            }
            function display(xhttp) {
            document.getElementById("demo").innerHTML =
            xhttp.responseText;
            }

    </script> -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <!--header and navbar-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="row w-100">
                    <a class="navbar-brand " href="#">Undiscovered Beauty</a>

                    <!--hamburger menu-->
                    <button class="navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-sm-auto float-right text-right">

                    <?php
                    if (!isset($username) || $username == "")
                    { echo '
                        <span class="navbar-text">Login to view cart: </span>
                            <li class="nav-item active">
                                <a class="nav-link" href="signIn.php">Login</a>
                            </li>
                            <span class="navbar-text">|</span>
                            <li class="nav-item">
                                <a class="nav-link" href="signUp.php">Join</a>
                            </li>';
                    }
                    else
                    {
                        echo "
                            <span class='navbar-text'>Welcome $username 
                            <a href='signOut.php'>Sign Out</a></span> 
                            <!--shopping cart-->
                            <li class='nav-item dropdown mx-2'>
                                <button class='btn btn-outline-success dropdown-toggle my-2 my-sm-0' type='button'
                                    href='#' id='navbarDropdown' data-toggle='dropdown' aria-haspopup='true'
                                    aria-expanded='false'>
                                    View Cart<span class='caret'></span>
                                </button>
                                <ul class='dropdown-menu dropdown-cart' role='menu'>
                                    <li class='text-center'>Your Shopping Cart</li>
                                    <hr />";
                        // include 'displayCart.php';
                        echo "<hr />
                                    <li class='text-center'><a href='#'>Checkout</a></li>
                                </ul>
                            </li>";
                    }
                    ?>
                        </ul>
                    </div>

                    <!--this is to put the dropdowns on another line-->
                    <div class="w-100"></div>

                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bath & Shower
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#soapbars">Soap Bars</a>
                                <a class="dropdown-item" href="#bathbombs">Bath Bombs</a>
                                <a class="dropdown-item" href="#showerfizz">Shower Fizz</a>
                                <a class="dropdown-item" href="#bathsalt">Bath Salt</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Body
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#lotion">Lotion</a>
                                <a class="dropdown-item" href="#bodywhip">Body Whip</a>
                                <a class="dropdown-item" href="#massagebar">Massage Bar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Face
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#lipscrup">Lip Scrub</a>
                                <a class="dropdown-item" href="#lipbalm">Lip Balm</a>
                                <a class="dropdown-item" href="#faceoil">Face Oil</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gifts
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#candles">Candles</a>
                                <a class="dropdown-item" href="#bundles">Bundles</a>
                                <a class="dropdown-item" href="#accessories">Accessories</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <section class="banner" id="jumbotron">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="jumbotron">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="..." alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="..." alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- WIP 

    <section class="product" id="products">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <h2>Top Sellers</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product" id="products">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="hText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <h2>New Arrivals</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
-->

    <section class="product" id="bath&shower">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        Bath & Shower
                    </div>
                    <div class="card-body">
                        <a id='soapbars'></a>
                        <h5 class="card-title">Soap Bars:</h5>
                        <div class="row">

                        <!--
                            <div class='col-md-4'>
                                <div class='productSnip'>
                                    <div class='imgBox'><img src='$product_image' class='img-fluid'></div>
                                    <div class='content'>
                                        <h1>$product_price</h1>
                                        <h1>
                                            <p><s>$product_price_sale</s></p>
                                        </h1>
                                        <p>$product_name</p>
                                        <span>$product_description</span>
                                        <a href='' class='btn mybtn'>Add to Cart</a>
                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class='productSnip'>
                                    <div class='imgBox'><img src='$product_image' class='img-fluid'></div>
                                    <div class='content'>
                                        <h1>$product_price</h1>
                                        <h1>
                                            <p><s>$product_price_sale</s></p>
                                        </h1>
                                        <p>$product_name</p>
                                        <span>$product_description</span>
                                        <a href='' class='btn mybtn'>Add to Cart</a>
                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>
                        -->


                        </div>

                        <a id='bathbombs'></a>
                        <h5 class="card-title">Bath Bombs:</h5>
                        <div class="row">
                        
                        </div>

                        <a id='showerfizz'></a>
                        <h5 class="card-title">Shower Fizz:</h5>
                        <div class="row">

                        </div>

                        <a id='bathsalt'></a>
                        <h5 class="card-title">Bath Salt:</h5>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product" id="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        Body
                    </div>
                    <div class="card-body">
                        <a id='lotion'></a>
                        <h5 class="card-title">Lotion:</h5>
                        <div class="row">
                            
                        </div>

                        <a id='bodywhip'></a>
                        <h5 class="card-title">Body Whip:</h5>
                        <div class="row">

                        </div>

                        <a id='massagebar'></a>
                        <h5 class="card-title">Massage Bar:</h5>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product" id="face">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        Face
                    </div>
                    <div class="card-body">
                        <a id='lipscrup'></a>
                        <h5 class="card-title">Lip Scrub:</h5>
                        <div class="row">

                        </div>

                        <a id='lipbalm'></a>
                        <h5 class="card-title">Lip Balm:</h5>
                        <div class="row">

                        </div>

                        <a id='faceoil'></a>
                        <h5 class="card-title">Face Oil:</h5>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product" id="gifts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        Gifts
                    </div>
                    <div class="card-body">
                        <a id='candles'></a>
                        <h5 class="card-title">Candles:</h5>
                        <div class="row">

                        </div>

                        <a id='bundles'></a>
                        <h5 class="card-title">Bundles:</h5>
                        <div class="row">

                        </div>

                        <a id='accessories'></a>
                        <h5 class="card-title">Accessories:</h5>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="">
        <div class="container">
            <p>Joshua Mathews | cs313-01</p>
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

    <script type="text/javascript">
        $(document).scroll(function () {
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
</body>

</html>