<?php
   require "dbConnect.php";
   $db = get_db();

   $project = $db->prepare("SELECT * FROM project");
   $project->execute();

   while ($pRow = $project->fetch(PDO::FETCH_ASSOC))
   {
      $project_name = $pRow["project_name"];
      $project_note = $pRow["project_note"];
      $project_description = $pRow["project_description"];
      $project_image = $pRow["project_image"];
      $project_image_description = $pRow["project_image_description"];
      $bFeatured = $pRow["bFeatured"];

      echo '$project_name';

      // $project_name = $pRow["project_name"];
      // $project_note = $pRow["project_note"];
      // $project_description = $pRow["project_description"];
      // $project_image = $pRow["project_image"];
      // $project_image_description = $pRow["project_image_description"];
      // $project_bFeatured = $pRow["bFeatured"]

      // if ($project_bFeatured == true)
      // {
      //    echo '<div class="card border-dark shadow-lg text-center" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
      //             <img src="$project_image" class="card-img-top" alt="$project_image_description">
      //             <div class="card-body">
      //                <h5>"$project_name"</h5>
      //             </div>
      //             <div class="card-footer">
      //                <p>"$project_note"</p>
      //                <!-- <a href="#" class="btn btn-primary w-100">View Project</a> -->
      //                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#Modal2">
      //                   View Project
      //                </button>
      //             </div>
      //          </div>'
      // }
   }
?>