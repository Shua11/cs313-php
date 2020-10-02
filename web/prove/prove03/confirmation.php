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
                        <h2>Order Confirmation</h2>
                        <p>You order has been recieved!</p>
                    </div>
                </div>
            </div>
            <div class="container bg-light py-3 rounded">
                <h2>Order Details</h2>
                <p>Name: John Doe</p>
                <p>Address: 12345 Main St. Rexburg, ID 83440</p>
                <p>Items:</p>
                <?php 
                if (isset($_SESSION['bathBomb']) && !empty($_SESSION['bathBomb'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['bathBomb'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['bathBomb'][0] .'</span>
                                        <span>$'. $_SESSION['bathBomb'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                if (isset($_SESSION['bathSalt']) && !empty($_SESSION['bathSalt'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['bathSalt'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['bathSalt'][0] .'</span>
                                        <span>$'. $_SESSION['bathSalt'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                if (isset($_SESSION['bodyWhip']) && !empty($_SESSION['bodyWhip'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['bodyWhip'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['bodyWhip'][0] .'</span>
                                        <span>$'. $_SESSION['bodyWhip'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                if (isset($_SESSION['lotion']) && !empty($_SESSION['lotion'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['lotion'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['lotion'][0] .'</span>
                                        <span>$'. $_SESSION['lotion'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                if (isset($_SESSION['massageBar']) && !empty($_SESSION['massageBar'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['massageBar'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['massageBar'][0] .'</span>
                                        <span>$'. $_SESSION['massageBar'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                if (isset($_SESSION['showerFizz']) && !empty($_SESSION['showerFizz'])) {
                    echo '<li>
                            <span class="item">
                                <span class="item-left">
                                    <img src= '. $_SESSION['showerFizz'][1] .' alt="" height="50" width="50" />
                                    <span class="item-info">
                                        <span>'. $_SESSION['showerFizz'][0] .'</span>
                                        <span>$'. $_SESSION['showerFizz'][2] .'</span>
                                    </span>
                                </span>
                            </span>
                        </li>';}
                        ?>
                <p>Total price: $<?php echo 
                                    $_SESSION['bathBomb'][2] + 
                                    $_SESSION['bathSalt'][2] + 
                                    $_SESSION['bodyWhip'][2] +
                                    $_SESSION['lotion'][2] +
                                    $_SESSION['massageBar'][2] +
                                    $_SESSION['showerFizz'][2] 
                                ?>
                </p>
            </div>
        </div>
    </section>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>

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

</body>

</html>