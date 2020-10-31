<?php
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
} else {
   header("Location: prove07.php");
}

if (isset($_POST['inputSelect']))
{
   $selected = $_POST['inputSelect'];

    // Connect to the DB
	require "dbConnect.php";
	$db = get_db();
   $query = 'SELECT * FROM project WHERE id=:selected';

	$statement = $db->prepare($query);
	$statement->bindValue(':selected', $selected);
	$statement->execute();

	while ($pRow = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $number = $pRow["id"];
      $project_name = $pRow["project_name"];
      $project_note = $pRow["project_note"];
      $project_description = $pRow["project_description"];
      $project_image = $pRow["project_image"];
      $project_image_description = $pRow["project_image_description"];
      $bFeatured = $pRow["bfeatured"];
   }
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Edit Project</title>
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
            <a class="navbar-brand" href="prove07.php"><img src="./images/PRC-logo.png" alt="Logo" style="height:100%;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-lg-auto">
                  <li class="nav-item">
                     <a href="prove07.php" class="nav-link btn btn-color w-100">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="/prove/prove07/projects.php" class="nav-link btn btn-color w-100">Projects</a>
                  </li>
                  <?php
                     if (isset($username) || !$username == "")
                     { echo '<li class="nav-item">
                        <a href="/prove/prove07/manage-projects.php" class="nav-link btn btn-color w-100 active">Manage Projects <span class="sr-only">(current)</span></a>
                     </li>';
                     }
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

   <!--manage projects header-->
   <section class="about" id="about">
      <div class="container">
         <div class="row" data-aos="fade-in" data-aos-duration="1000">
            <div class="offset-sm-2 col-sm-8">
               <div class="hText">
                  <h2 class="text-center">Edit Project</h2>
               </div>
            </div>
         </div>
      </div>
   </section>

   <br>
   <br>

   <!-- Main body container -->
   <div class="container">
      <!-- Contact us form -->
      <div class="jumbotron tranparent8 shift-down">
         <div>
            <h2>Add a Project</h2>
            <div class="container">
               <p>Please fill out the form to add a project to the site.</p>
               <form action="upload.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  <div class="form-group">
                     <label for="uname">Project Name:</label>
                     <input type="text" class="form-control" id="pname" placeholder="Enter project name" name="pname" value="<?php echo $project_name; ?>" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                     <label for="pnote">Project Note:</label>
                     <input type="text" class="form-control" id="pnote" placeholder="Enter project note" name="pnote" value="<?php echo $project_note; ?>" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                     <label for="pdesc">Project Description:</label>
                     <input type="textarea" class="form-control" id="pdesc" placeholder="Enter project description" name="pdesc" value="<?php echo $project_description; ?>" 
                        required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                     <!-- <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div> -->
                     <label for="fileToUpload">Project Image: <?php echo 'Previous Image: ' . $project_image; ?></label>
                     <div class="custom-file">
                        <input type="file" class="custom-file-input form-control" name="fileToUpload" id="fileToUpload"  
                           aria-describedby="fileToUpload" required>
                        <label class="custom-file-label" for="fileToUpload">Choose image</label>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="idesc">Project Image Description:</label>
                     <input type="text" class="form-control" id="idesc" placeholder="Enter project image description" value=" <?php echo $bFeatured ?>" 
                        name="idesc" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  
                  <div class="form-group form-check">
                     <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="chkbox" <?php if ($bFeatured) {echo 'checked';} ?> > Featured project.
                        <div class="valid-feedback">Valid.</div>
                     </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-secondary" href="manage-projects.php"
                  role="button" data-toggle="tooltip" data-placement="right" title="Go back to Manage Projects">Cancel</a>
               </form>
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

      // Name of the file appears on select
      $(".custom-file-input").on("change", function () {
         var fileName = $(this).val().split("\\").pop();
         $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });

      // Disable form submissions if there are invalid fields
      (function () {
         'use strict';
         window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
               form.addEventListener('submit', function (event) {
                  if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                     
                  }
                  form.classList.add('was-validated');
               }, false);
            });
         }, false);
      })();

      $(function () {
         $('[data-toggle="tooltip"]').tooltip()
      });
   </script>
</body>

</html>