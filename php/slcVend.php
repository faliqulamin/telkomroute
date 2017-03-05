<?php
	include("../conn.php");
	$queryString = "SELECT vID AS value, vName as text FROM vendor";
	$query = mysqli_query($mysqli,$queryString) or die(mysqli_error($mysqli));
	$data = array();
	while($result = mysqli_fetch_assoc($query)) {
		$data[] = $result;
	}
	
	echo json_encode($data);
	
?>