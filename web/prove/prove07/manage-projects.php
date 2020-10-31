<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
} else {
   header("Location: prove07.php");
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Manage Projects</title>
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
                     <a href="prove07.php" class="nav-link btn btn-color w-100 active">Home <span class="sr-only">(current)</span></a>
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
                        <span class="navbar-text float-right btn-color align-middle">Welcome ' . $username  . '
                        <a class="nav-link btn-color float-right" href="signOut.php">Sign Out</a>
                        </span></li>';
                     }
                  ?>
               </ul>
            </div>
         </div>
      </nav>
   </header>

   <div class="jumbotron jumbotron-fluid banner2 tranparent">
   </div>

   <div class="container">
      <div class="jumbotron tranparent8">
         <div>
               <h2>Manage Projects</h2>
         </div>
      </div>
   </div>

   <!-- Main body container -->
   <div class="container">
      <!-- Contact us form -->
      <div class="jumbotron tranparent8 shift-down">
         <div>
               <h2>Add Project</h2>
         </div>
      </div>
   </div>

   <!-- Main body container -->
   <div class="container">
      <!-- Contact us form -->
      <div class="jumbotron tranparent8 shift-down">
         <div>
            <h2>Edit/Delete Project</h2>
         </div>
      </div>
   </div>
   





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