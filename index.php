<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
	<?php
		include('php/main.php');
		$site = "http://news.gogo.mn";
		foreach(getNews(getLinks($site,"a[href]"),"/r/",$site) as $url){
			dataToDB($url,getNewsData($site.$url,"h1","div#ncbubuhome"));
		}

		// dataToDB("/r/161734",getNewsData($site."/r/161734","h1","div#ncbubuhome"));
	?>
</body>
</html>