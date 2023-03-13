<?php
	
	include("db_connection.php");
	$lid = $_POST['lending_id'];
	$bid = $_POST['book_id'];
	$uid = $_POST['user_id'];
	$dol = $_POST['date_of_lending'];
	$dor = $_POST['date_of_return'];
	$status = $_POST['status'];
	$remarks = $_POST['remarks'];
	
	$lid=rand(1,10000);

	$sql = "INSERT INTO lending_tab (sid,lending_id, book_id, user_id, date_of_lending,date_of_return,status,remarks) 
			VALUES (0,'$lid', '$bid', '$uid', '$dol', '$dor', '$status', '$remarks')";

	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	?>