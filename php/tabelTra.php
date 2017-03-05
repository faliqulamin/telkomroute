<?php
	include("../conn.php");
	$queryString = "SELECT T.*,V.vName FROM transmission T INNER JOIN vendor V ON V.vID=T.VID";
	$query = mysqli_query($mysqli,$queryString) or die(mysqli_error($mysqli));
	$data = array();
	while($result = mysqli_fetch_assoc($query)) {
		$result["no"] = "";
		$data[] = $result;
	}
	
	echo '{"data":'.json_encode($data).'}';
	
?>