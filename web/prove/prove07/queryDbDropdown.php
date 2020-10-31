<?php
   require "dbConnect.php";
   $db = get_db();

   $project = $db->prepare("SELECT * FROM project");
   $project->execute();

   while ($pRow = $project->fetch(PDO::FETCH_ASSOC))
   {
      $number = $pRow["id"];
      $project_name = $pRow["project_name"];

      echo ' <option value=" ' . $number . ' ">' . $project_name . '</option>';
   }
?>