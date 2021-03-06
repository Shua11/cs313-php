<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
   if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
   } else {
      echo "File is not an image. ";
      $uploadOk = 0;
   }
}

// Check if file already exists
if (file_exists($target_file)) {
   echo "Sorry, file already exists. ";
   $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   echo "Sorry, your file is too large. ";
   $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
   $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "<br> Your file was not uploaded. ";
   echo '<script>alert("Your file was not uploaded.")</script>';
// if everything is ok, try to upload file
} else {
   // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   //    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])) . " has been uploaded.";
   if (isset($_POST['selected']))
   {
      $selected = $_POST['selected'];
      $projectname = $_POST['pname'];
      $projectnote = $_POST['pnote'];
      $projectdesc = $_POST['pdesc'];
      $imagedesc = $_POST['idesc'];

      if (isset($_POST['chkbox']))
      {
         $chkfeatured = 'Yes';
      } else {
         $chkfeatured = 'No';
      }

      $projectname = htmlspecialchars($projectname);
      $projectnote = htmlspecialchars($projectnote);
      $projectdesc = htmlspecialchars($projectdesc);
      // $imagename = 'uploads/' . htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])); 
      $imagename = 'https://via.placeholder.com/512x512.png?text=Image+Upload+Unavailable'; 
      $imagedesc = htmlspecialchars($imagedesc);

      require("dbConnect.php");
      $db = get_db();

      $query = 'UPDATE project SET project_name=:projectname WHERE id=:selected';
      $statement = $db->prepare($query);
      $statement->bindValue(':selected', $selected);
      $statement->bindValue(':projectname', $projectname);
      $statement->execute();


      $query = "UPDATE project SET project_name=:projectname, project_note=:projectnote, project_description=:projectdesc, project_image=:imagename, project_image_description=:imagedesc, bFeatured=:chkfeatured WHERE id=:selected";
      $statement = $db->prepare($query);
      $statement->bindValue(':selected', $selected);
      $statement->bindValue(':projectname', $projectname);
      $statement->bindValue(':projectnote', $projectnote);
      $statement->bindValue(':projectdesc', $projectdesc);
      $statement->bindValue(':imagename', $imagename);
      $statement->bindValue(':imagedesc', $imagedesc);
      $statement->bindValue(':chkfeatured', $chkfeatured);
      $statement->execute();

      header("Location: manage-projects.php");
      die();


   // } else {
   //    echo "Sorry, there was an error uploading your file.";
   //    echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
   // }
   }
}
?>