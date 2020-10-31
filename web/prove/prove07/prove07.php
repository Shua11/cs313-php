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
                        <span class="float-none btn-color align-middle">Login to make project changes: 
                        <a class="nav-link btn-color float-right" href="signIn.php">Login</a> | 
                        <a class="nav-link btn-color float-right" href="signUp.php">Register</a>
                        </span></li>';
                     }
                     else
                     {
                        echo '<li class="nav-item"> 
                        <span class="navbar-text">Welcome $username 
                        <a href="signOut.php">Sign Out</a>
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
            <?php include 'queryDb.php';?>
         </div>
      </div>
   </section>

   <!-- Modal1 -->
   <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalLabel">Academy Blvd. Bridge at Cottonwood Creek</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               PRC was a member of the design team, led by CP&Y, Inc., responsible for the Grading, Erosion and
               Stormwater
               Quality Control Plan/Report (GESC). The GSEC included a narrative report describing erosion and
               sedimentation
               control during construction operations. Grading Plans, details and specifications for recommended control
               measures (BMPs) were also included in the GESC to ensure effective erosion control and the preservation
               of the
               stormwater quality during the replacement of the bridge and construction of associated trail improvements
               and
               stream bank stabilization measures.
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal2 -->
   <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalLabel">Westside Ave. Action Plan (WAAP)- West Colorado Ave. Design of
                  Water
                  and Sanitary Sewer Replacement</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               PRC was responsible for the design of the Water Plans and Sanitary Sewer Replacement. PRC worked closely
               with
               Town of Manitou, Colorado Springs Utilities, El Paso County and Felsburg Holt & Ullevig (FHU), to prepare
               Preliminary and Final Construction Documents. The improvements included replacement of 16-inch and
               30-inch
               waterlines as well as 12-inch sanitary sewer line replacement and sewer line rehabilitation (lining).
               Many of
               the existing utilities are very old and were not documented or accurately mapped when originally
               constructed.
               As such, PRC worked very closely with Wildcat Construction throughout the duration of the project to
               address
               unforeseen issues and to adjust designs when necessary.
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal3 -->
   <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="ModalLabel">Private Residence- 12 Random Rd. Pond maintenance and Bank
                  Stabilization</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               PRC was engaged by the homeowner to assist with a Floodplain Development Permit application. PRC worked
               with
               Bailey Professional Solutions (BPS) to conduct a survey of the existing conditions. PRC then developed
               plans
               and specifications for bank stabilization and the dredging of the existing pond. PRC prepared the
               applications
               required by Cherry Hills Village, the State Engineer's Office and the United States Army Corps of
               Engineers.
               PRC has great working relationships with these agencies and were able to meet with them and discuss the
               implications of proposed improvements. After successful approvals from all stakeholders, the project was
               completed. PRC also provided Construction Administrative Services until completion of the landscape
               installation.
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
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