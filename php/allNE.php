<?php
	$id=$_GET["traid"];
	include("../conn.php");
	$queryString = "SELECT nID as value, nName as text FROM networkelement NE inner join transmission T on T.tid=NE.tid where T.tid=$id";
	$query = mysqli_query($mysqli,$queryString) or die(mysqli_error($mysqli));
	$contatos = array();
	while($contato = mysqli_fetch_assoc($query)) {
		$contatos[] = $contato;
	}
	echo json_encode($contatos);
?>