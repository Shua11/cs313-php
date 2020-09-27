<?php
/* loop through the directory looking for projects */

/* first project is 1. last project is 2 */
for ($x = 1; $x <=2; $x++)
{
    $dir = "../../projects/project" . $x . ".php";
    
    /* find all files in a specified directory that are a project*.php */
    $r = glob($dir);

    /* if exists then create content */
    if ($r[0])
    {
        $tags = get_meta_tags($r[0]);

        echo '<div class="col-sm-6">
            <div class="assignSnip" data-aos="fade-' . 
            (($x % 2 === 0)?'left':'right') . 
            '" data-aos-duration="1000"data-aos-delay="100">';

        if ($tags['img'] != "")
        {
            echo '<div class="imgBox"><img src="' . $tags['img'] .'" class="img-fluid"></div>';
        }   

        echo '<div class="content">
            <h1>' . $tags['application-name'] . '</h1>
            <p>' . $tags['description'] . '</p>
            <a href="' . $r[0] . '" class="btn mybtn">Go to project</a>
            <div class="clearfix"></div>
            </div></div>';
    }
}
?>