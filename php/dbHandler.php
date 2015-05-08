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
		// $sql = "SELECT * FROM `gogo` WHERE id = 1";
		$sql = "SELECT * FROM `gogo` WHERE `title` LIKE '%".$name."%' OR `content` LIKE '%" . $name  ."%'";
		echo $sql; die;
		// $sql="SELECT `url`, `title`, `content` FROM gogo WHERE  `title` LIKE '%" . $name . "%' OR `content` LIKE '%" . $name  ."%'";
			  // SELECT `url`, `title`, `content` FROM gogo WHERE `title` LIKE '%Б.Батбаяр%' OR `content` LIKE '%Б.Батбаяр%' 
		mysql_select_db($GLOBALS['db_name']);
		// $result = $conn->query($sql);
		$data = mysql_query( $sql, $conn );
		if(! $data )
		{
		  die('Could not enter data: ' . mysql_error());
		}

		while ($row = mysql_fetch_array($data))
		{
		  echo 'name: '. $row['title'];
		}

		// $row = mysql_fetch_row($data);
		// print_r($row);

		// while($row = mysql_fetch_assoc($data))
		// {
		//     echo "Tutorial ID :{$row['title']}  <br> ".
		//          "Title: {$row['content']} <br> ".
		//          "Author: {$row['url']} <br> ".
		//          "--------------------------------<br>";
		// } 
		// echo "Fetched data successfully\n";
		// echo "asd";
		// mysql_free_result($data); die;

		// $urls = array();
		// while ($row_user = mysql_fetch_assoc($data))
		//     $urls[] = $row_user['url'];
		// while($row = mysql_fetch_array($data)){ 
		// 	$urls['title']		=$row['title']; 
		// 	$urls['content']	=$row['content']; 
		// 	$urls['url']		=$row['url']; 
		// }
		// print_r($urls); die;
		mysql_close($conn);
	}
}
?>