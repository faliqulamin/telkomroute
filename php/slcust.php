<?php
	include("../conn.php");
	$queryString = "SELECT cID as value, cName as text FROM customer";
	$query = mysqli_query($mysqli,$queryString) or die(mysqli_error($mysqli));
	$contatos = array();
	while($contato = mysqli_fetch_assoc($query)) {
		$contatos[] = $contato;
	}
	echo json_encode($contatos);
?>