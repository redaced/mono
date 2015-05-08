<?php
$host = "localhost";
$db_name = "mono";
$username = "root";
$password = "pass";

function insert_db($tbl_name,$url,$head,$content){
	$conn = mysql_connect($GLOBALS['host'], $GLOBALS['username'], $GLOBALS['password']);
	if (! $conn) {
	    die('Could not connect: ' . mysql_error());
	}
	mysql_query("SET NAMES utf8");
	$sql = "INSERT INTO ".$tbl_name." ( `url`, `title`, `content`) VALUES ('$url','$head','$content')";
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
	$sql = "SELECT `url` FROM `gogo`";
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
		$sql = "SELECT * FROM `gogo` WHERE `title` LIKE '%".$name."%' OR `content` LIKE '%" . $name  ."%'";
		mysql_select_db($GLOBALS['db_name']);
		// $result = $conn->query($sql);
		$data = mysql_query( $sql, $conn );
		if(! $data )
		{
		  die('Could not enter data: ' . mysql_error());
		}
		$content = array();
		while($row = mysql_fetch_assoc($data))
		{
		    $content['title'] = $row['title'];
		    $content['content'] = $row['content'];
		    $content['url'] = $row['url'];
		} 
		mysql_close($conn);
		return $content;
	}
}
?>