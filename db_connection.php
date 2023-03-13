<?php
	$connect = new mysqli("localhost", "root", "", "lms_db");
	if ($connect->connect_errno)
	{
		die('Could not connect: '.$connect->connect_errno);
	}
?>