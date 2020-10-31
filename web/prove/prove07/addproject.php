<!DOCTYPE html>
<html lang="en">

<head>
   <title>add project</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

   <div class="container">
      <h2>Add a Project</h2>
      <p>Please fill out the form to add a project to the site.</p>
      <form action="upload.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
         <div class="form-group">
            <label for="uname">Project Name:</label>
            <input type="text" class="form-control" id="pname" placeholder="Enter project name" name="pname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <div class="form-group">
            <label for="pnote">Project Note:</label>
            <input type="text" class="form-control" id="pnote" placeholder="Enter project note" name="pnote" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <div class="form-group">
            <label for="pdesc">Project Description:</label>
            <input type="textarea" class="form-control" id="pdesc" placeholder="Enter project description" name="pdesc"
               required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>

         <div class="form-group">
            <!-- <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
               </div> -->
            <label for="fileToUpload">Project Image:</label>
            <div class="custom-file">
               <input type="file" class="custom-file-input form-control" name="fileToUpload" id="fileToUpload"
                  aria-describedby="fileToUpload" required>
               <label class="custom-file-label" for="fileToUpload">Choose image</label>
            </div>
         </div>

         <div class="form-group">
            <label for="idesc">Project Image Description:</label>
            <input type="text" class="form-control" id="idesc" placeholder="Enter project image description"
               name="idesc" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>

         <div class="form-group form-check">
            <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="chkbox" > Featured project.
               <div class="valid-feedback">Valid.</div>
            </label>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>

   



   <script>
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
   </script>

</body>

</html>