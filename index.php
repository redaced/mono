
	<?php

		// include('php/main.php');
		// include('php/sites_conf.php');
		// $data = gogo();
		// foreach(getNews(getLinks($data['site'],$data['news_link']),$data['news_url'],$data['site']) as $url){
		// 	dataToDB($url,getNewsData($data['site'].$url,$data['head_tag'],$data['content_tag']));
		// }

	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mono</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
        	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Mono</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="search.php" method="post">
            <input type="text" placeholder="Search..." class="form-control" name="s">
          </form>
        </div>
      </div>
    </nav>
<!--           <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Mono</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><form action="search.php" method="post">
	<input type="text" class="form-control" name="s">
	<br>
	<input type="submit" value="Search" class="btn btn-primary">
</form></li>
                </ul>
              </nav>
            </div>
          </div> -->

          <div class="inner cover">
            <h1 class="cover-heading">Монитор.</h1>
            <p class="lead">Монитор гэдэг нь блах блах</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Илүү их</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p> <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/peternity9">Hello World</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
