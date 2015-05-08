<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>

	<?php

		include('php/main.php');
		include('php/sites_conf.php');
		$data = gogo();
		foreach(getNews(getLinks($data['site'],$data['news_link']),$data['news_url'],$data['site']) as $url){
			dataToDB($url,getNewsData($data['site'].$url,$data['head_tag'],$data['content_tag']));
		}

	?>

</body>
</html>