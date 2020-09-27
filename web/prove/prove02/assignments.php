<?php
/* loop through the directory looking for assignments */

/* first assignment is 02. last assignment is 13 */
for ($x = 02; $x <=13; $x++)
{
    /* number padding found at:
    https://stackoverflow.com/a/5659093
    */
    $dir = "../prove" . sprintf("%02d", $x) . "/prove" . sprintf("%02d", $x) . ".php";
    
    /* for local testing
    $dir = "../new/prove" . sprintf("%02d", $x) . ".php";
    */

    /* find all files in a specified directory that are a prove*.php */
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
            <a href="' . $r[0] . '" class="btn mybtn">Go to assignment</a>
            <div class="clearfix"></div>
            </div></div>';
    }
}
?>