<!DOCTYPE html>
<html>
<head>
	<title>Mono</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php 
	include('php/dbHandler.php');
	include('php/sites_conf.php');
	$as = search();
	$data = gogo();
?>
	<?php foreach ($as as $a):?>
		<a href="<?php echo $data['site'].$a['url']; ?>" target="_blank"><p><?php echo $a['title']?></p></a>
	<?php endforeach;?>

</body>
</html>
