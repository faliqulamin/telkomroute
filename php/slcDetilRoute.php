<?php
	include("../conn.php");
	//$id=$_GET["traid"];
	$filter="";
	if(isset($_GET["idNe"])){
		$filter=$filter.' and MNE.nID='.$_GET["idNe"];
	}
	if(isset($_GET["idDir"])){
		$filter=$filter.' and MNE.mneDirection='.$_GET["idDir"];
	}
	if(isset($_GET["idModul"])){
		$filter=$filter.' and  MNE.mID='.$_GET["idModul"];
	}
	if(isset($_GET["rack"])){
		$filter=$filter.' and  MNE.rack='.$_GET["rack"];
	}
	if(isset($_GET["subrack"])){
		$filter=$filter.' and  MNE.subrack='.$_GET["subrack"];
	}
	if(isset($_GET["slot"])){
		$filter=$filter.' and  MNE.slot='.$_GET["slot"];
	}
	if(isset($_GET["port"])){
		$filter=$filter.' and  MNE.port='.$_GET["port"];
	}
	$queryString = 'SELECT MNE.*, T.TName as Transmisi, T.TID, NE.nName As NE, M.mName as Card, DIR.nName as Direction FROM modulne MNE
					INNER JOIN networkelement NE ON NE.nID=MNE.nID
					INNER JOIN (SELECT *from networkelement) DIR ON DIR.nID=MNE.mneDirection
					INNER JOIN modul M ON M.mID=MNE.mID
					INNER JOIN transmission T ON T.TID=NE.nID
					WHERE MNE.nID<>-1 '.$filter;
	
	
	$query = mysqli_query($mysqli,$queryString) or die(mysqli_error($mysqli));
	$contatos = array();
	while($contato = mysqli_fetch_assoc($query)) {
		$contatos[] = $contato;
	}
	echo json_encode($contatos);
?>