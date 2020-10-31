<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Prove06</title>
   <meta charset="utf-8">
   <meta name="application-name" content="Prove07">
   <meta name="description" content="Create a PHP application to  functionality related to inserting new data, updating existing data, and deleting from a database.">
   <meta name="img" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap 4 Stylesheet -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <!-- Animations Stylesheet -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Metamorphous|Swanky+and+Moo+Moo" rel="stylesheet">

   <!-- Custom Stylesheet -->
   <link rel="stylesheet" type="text/css" href="prove07.css">
   <script src="prove07.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" onload="onload();">
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#"><img src="./images/PRC-logo.png" alt="Logo" style="height:100%;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-lg-auto">
                  <li class="nav-item">
                     <a href="#" class="nav-link btn btn-color w-100 active">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="/prove/prove07/projects.php" class="nav-link btn btn-color w-100">Projects</a>
                  </li>
                  <?php
                     if (isset($username) || !$username == "")
                     { echo '<li class="nav-item">
                        <a href="/prove/prove07/manage-projects.php" class="nav-link btn btn-color w-100">Manage Projects</a>
                     </li>';
                     }
                  ?>
                  <?php
                     if (!isset($username) || $username == "")
                     { echo '<li class="nav-item float-right">
                        <span class="float-right btn-color align-middle">Login to make project changes: 
                        <div>
                           <a class="nav-link btn-color float-left" href="signIn.php">Login</a>
                           <a class="nav-link btn-color float-right" href="signUp.php">Register</a>
                        </div>
                        </span></li>';
                     }
                     else
                     {
                        echo '<li class="nav-item float-right"> 
                        <span class="navbar-text float-right btn-color">Welcome ' . $username  . '
                        <a class="nav-link btn-color float-right" href="signOut.php">Sign Out</a>
                        </span></li>';
                     }
                  ?>
               </ul>
            </div>
         </div>
      </nav>
   </header>

   


   <!-- Spacing -->
   <div class="jumbotron jumbotron-fluid banner tranparent">
      <div class="container">
         <div class="bannerBox">
            <div class="shift-up">
            </div>
         </div>
      </div>
   </div>

   <!-- SBA 8(a) Certification -->
   <div class="container" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
      <div class="jumbotron tranparent8 shift-down">
         <p class="lead">PRC Engineering is a privately-owned SBA 8(a) certified small business offering engineering and
            consulting services to Federal, County, and State government agencies as well as private sector clientele.
            Our core services include Water Resources, Site Development, Utilities (Water and Wastewater),
            Transportation
            and Energy Conservation.</p>
         <hr class="my-4">
         <div class="container-sm">
            <img class="sba" src="./images/8a-logo.jpg">
            <p>More information about the services we offer</p>
            <a class="btn btn-primary btn-lg" href="/pdf/More-Information-about-the-services-we-offer.pdf"
               target="_blank" role="button" data-toggle="tooltip" data-placement="right" title="Opens in new tab">Learn
               more</a>
         </div>
      </div>
   </div>

   <!--Featured projects header-->
   <section class="about" id="about">
      <div class="container">
         <div class="row" data-aos="fade-in" data-aos-duration="1000">
            <div class="offset-sm-2 col-sm-8">
               <div class="hText">
                  <h2 class="text-center">Featured Projects</h2>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Featured project cards -->
   <section class="featProj">
      <div class="container">
         <div class="card-deck">
            <?php include 'queryDbFeatured.php';?>
         </div>
      </div>
   </section>

   <!-- Footer -->
   <footer>
      <div class="container">
         <p>©Joshua Mathews | cse341 </p>
      </div>
   </footer>


   <!-- Bootstrap dependancies -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>
   <!--Animations from https://github.com/michalsnik/aos-->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>AOS.init();</script>
   <!-- Header magic -->
   <script type="text/javascript">
      $(document).scroll(function () {
         $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
         $('.navbar-brand').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
      });
   </script>
</body>

</html>