<?php
$host = "localhost";
$db_name = "mono";
$username = "root";
$password = "pass";

function insert_db($data){
	$url = $data['url'];
	$head = $data['title'];
	$content = $data['content'];
	$site = $data['site'];
	$conn = mysql_connect($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password']);
	if (! $conn) {
	    die('Could not connect: ' . mysql_error());
	}
	mysql_query("SET NAMES utf8");
	$sql = "INSERT INTO news ( `url`, `title`, `content`,`site`) VALUES ('$url','$head','$content','$site')";
	mysql_select_db($GLOBALS['db_name']);
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
		echo $head."<br>".$content;
	  	die('Could not enter data: ' . mysql_error());
	}
	return true;
	mysql_close($conn);
}
function select_db(){
	$conn = mysql_connect($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password']);
	if (! $conn) {
	    die('Could not connect: ' . mysql_error());
	}
	mysql_query("SET NAMES utf8");
	$sql = "SELECT `url` FROM `news`";
	mysql_select_db($GLOBALS['db_name']);
	$data = mysql_query( $sql, $conn );
	if(! $data )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	$urls = array();
	while ($row_user = mysql_fetch_assoc($data))
	    $urls[] = $row_user['url'];
	return $urls;
	mysql_close($conn);

}
function search(){
	if(isset($_POST['s'])){ 
		$name=$_POST['s'];
		$conn = mysql_connect($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password']);
		if (! $conn) {
		    die('Could not connect: ' . mysql_error());
		}
		mysql_query("SET NAMES utf8");
		$sql = "SELECT * FROM `news` WHERE `title` LIKE '%".$name."%' OR `content` LIKE '%" . $name  ."%'";
		mysql_select_db($GLOBALS['db_name']);
		$data = mysql_query( $sql, $conn );
		if(! $data )
		{
		  die('Could not enter data: ' . mysql_error());
		}
		$content = array();
		$a = 0;
		while($row = mysql_fetch_assoc($data))
		{
			$content[$a]['id'] = $row['id'];
		    $content[$a]['title'] = $row['title'];
		    $content[$a]['content'] = $row['content'];
		    $content[$a]['url'] = $row['url'];
		    $content[$a]['site'] = $row['site'];
		    $content[$a]['name'] = $name;
		    $a++;
		} 
		mysql_close($conn);
		return $content;
	}
}
?>