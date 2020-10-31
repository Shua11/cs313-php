<?php
session_start();

if (isset($_POST['inputSelect']))
{
   $selected = $_POST['inputSelect'];

    // Connect to the DB
	require "dbConnect.php";
	$db = get_db();
	$query = 'DELETE FROM project WHERE id=:selected';

	$statement = $db->prepare($query);
	$statement->bindValue(':selected', $selected);
	$result = $statement->execute();

	if ($result)
	{
      header("Location: manage-projects.php");
      die();
	}
}
?>