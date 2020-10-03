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
                                <li id="item"> 
                                    <?php include 'addItem.php' ?>
                                </li>
                                <hr />
                                <li class="text-center"><a href="prove03.php"><button type="button" class="btn btn-info">Continue Shopping</button></a></li>
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
                    <div class="hText text-center">
                        <h2>Checkout</h2>
                        <p>Payment Information:</p>
                    </div>
                </div>
            </div>
            <div class="container bg-light py-3 rounded">
                <form name="chkForm" action="confirmation.php" onsubmit="return validate()" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter last name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="i.e. Rexburg" required> 
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>Choose...</option>
                            <option>AL</option>
                            <option>AK</option>
                            <option>AZ</option>
                            <option>AR</option>
                            <option>CA</option>
                            <option>CO</option>
                            <option>CT</option>
                            <option>DE</option>
                            <option>FL</option>
                            <option>GA</option>
                            <option>HI</option>
                            <option>ID</option>
                            <option>IL</option>
                            <option>IN</option>
                            <option>IA</option>
                            <option>KS</option>
                            <option>LA</option>
                            <option>ME</option>
                            <option>MD</option>
                            <option>MA</option>
                            <option>MI</option>
                            <option>MN</option>
                            <option>MS</option>
                            <option>MO</option>
                            <option>MT</option>
                            <option>NE</option>
                            <option>NV</option>
                            <option>NH</option>
                            <option>NJ</option>
                            <option>NM</option>
                            <option>NY</option>
                            <option>NC</option>
                            <option>ND</option>
                            <option>OH</option>
                            <option>OK</option>
                            <option>OR</option>
                            <option>PA</option>
                            <option>RI</option>
                            <option>SC</option>
                            <option>SD</option>
                            <option>TN</option>
                            <option>TX</option>
                            <option>UT</option>
                            <option>VT</option>
                            <option>VA</option>
                            <option>WA</option>
                            <option>WV</option>
                            <option>WI</option>
                            <option>WY</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="#####" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Use this as default payment method.
                        </label>
                        </div>
                    </div>
                    <a href="prove03.php"><button type="button" class="btn btn-info">Continue Shopping</button>
                    <button type="submit" id="subm" class="btn btn-success">Confirm Checkout</button>
                </form>
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
            location.reload();
        }
    </script>
</body>

</html>