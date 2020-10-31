<?php
   require "dbConnect.php";
   $db = get_db();

   $project = $db->prepare("SELECT * FROM project WHERE bFeatured IS TRUE");
   $project->execute();

   while ($pRow = $project->fetch(PDO::FETCH_ASSOC))
   {
      $number = $pRow["id"];
      $project_name = $pRow["project_name"];
      $project_note = $pRow["project_note"];
      $project_description = $pRow["project_description"];
      $project_image = $pRow["project_image"];
      $project_image_description = $pRow["project_image_description"];
      $bFeatured = $pRow["bFeatured"];

      echo '<div class="card border-dark shadow-lg text-center" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                  <img src="' . $project_image . '" class="card-img-top" alt="' . $project_image_description . '">
                  <div class="card-body">
                     <h5>"' . $project_name . '"</h5>
                  </div>
                  <div class="card-footer">
                     <p>"' . $project_note . '"</p>
                     <!-- <a href="#" class="btn btn-primary w-100">View Project</a> -->
                     <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#Modal' . $number . '">
                        View Project
                     </button>
                  </div>
               </div>';
      echo '
      <!-- Modal -->
      <div class="modal fade" id="Modal' . $number . '" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">' . $project_name . '</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body"> ' . $project_description . '
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>';
   }
?>