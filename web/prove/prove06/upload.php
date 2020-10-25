<?php
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
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])) . " has been uploaded.";



      $projectname = $_POST['pname'];
      $projectnote = $_POST['pnote'];
      $projectdesc = $_POST['pdesc'];
      $imagedesc = $_POST['idesc'];
      $chkfeatured = $_POST['chkbox'];
      $projectname = htmlspecialchars($projectname);
      $projectnote = htmlspecialchars($projectnote);
      $projectdesc = htmlspecialchars($projectdesc);
      $imagename = 'uploads/' . htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])); 
      $imagedesc = htmlspecialchars($imagedesc);
      $chkfeatured = htmlspecialchars($chkfeatured);

      require("dbConnect.php");
      $db = get_db();

      $query = 'INSERT INTO project  ( project_name, project_note, project_description, project_image, project_image_description, bFeatured) VALUES(:projectname, :projectnote, :projectdesc, :imagename, :imagedesc, :chkfeatured)';
      $statement = $db->prepare($query);
      $statement->bindValue(':projectname', $projectname);
      $statement->bindValue(':projectnote', $projectnote);
      $statement->bindValue(':projectdesc', $projectdesc);
      $statement->bindValue(':imagename', $imagename);
      $statement->bindValue(':imagedesc', $imagedesc);
      $statement->bindValue(':chkfeatured', $chkfeatured);
      $statement->execute();

      header("Location: addproject.php");
      die();




   } else {
      echo "Sorry, there was an error uploading your file.";
      echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
   }
}
?>