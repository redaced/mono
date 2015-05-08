<?php 
	include('php/dbHandler.php');
	$as = search();
	print_r ($as['title']);
?>