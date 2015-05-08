<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
</head>
<body>

<form action="search.php" method="post">
	<input type="text" name="s">
	<br><br>
	<input type="submit" value="Search">
</form>

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