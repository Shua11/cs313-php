<?php
session_start();

if (isset($_POST['inputGroupSelect']))
{
	$selected = $_POST['inputGroupSelect'];

    // Connect to the DB
	require "dbConnect.php";
	$db = get_db();
	$query = 'DELETE FROM project WHERE project_name=:selected';

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