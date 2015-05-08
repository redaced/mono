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
	
	<?php if($as):?>
		<a href="/monitor/index.php">Back</a>
		<?php foreach ($as as $a):?>
			<a href="<?php echo $data['site'].$a['url']; ?>" target="_blank"><p><?php echo $a['title']?></p></a>
			
		<?php endforeach;?>
	<?php else:?>
		<a href="/monitor/index.php">Back</a>
		<p>Олдсонгүй</p>
	<?php endif;?>
</body>
</html>