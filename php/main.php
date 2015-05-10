<?php
	include('ganon.php');
	include('sconf.php');
	include('dbHandler.php');

	function getLinks(){
		foreach (data() as $key => $data) {
			$html = file_get_dom($data['site']);
			$getlink = array();
			foreach($html('a[href]') as $element) {
				$getlink [] = $element->href;
			}
			// print_r($getlink); 
			getNews ($getlink,$key);
		}
	}
	function getNews($links,$key){
		$d = data();
		$tag = $d[$key]['news_url'];
		$main_link = $d[$key]['site'];
		$urls = select_db();
		$urls = array_unique($urls);
		// print_r($urls); die;
		$permitted = array();
		$a = 0;
		foreach ($links as $link) {
			if(strstr($link, $tag)){
				$link = str_replace($main_link, '', $link);
				$permitted[] = $link;
			}
		}
		$permitted = array_unique($permitted);
		// print_r(array_unique($permitted));
		$results=array_diff( $permitted, $urls);
		// print_r($results); die;
		RemoveHog($results,$key);  // adilhan link uudiig ustgah

	}
	function RemoveHog($ps,$key){
		$data = data();
		if ($data[$key]['banned']) {
			foreach ($ps as $i => $p) {
				$pos = strpos($p, $data[$key]['banned']);
				if ($pos === false) {
				} else {
				    unset($ps[$i]);
				}
			}
		}
		// print_r($ps);
		getNewsData($ps,$key);
	}


	function getNewsData($links,$key){
		// echo sizeof($links)."<br>";
		$d = data();
		// echo $d[$key]['site'];
		foreach ($links as $link) {
			$html = file_get_dom($d[$key]['site'].$link);
			$data = array();
			$data['title'] = $html($d[$key]['head_tag'], 0)->getPlainText();
			$data['title'] = str_replace("'", ' ', $data['title']);
			$data['title'] = str_replace('"', ' ', $data['title']);
			if ($html($d[$key]['content_tag'], 0)) {
				$data['content'] = $html($d[$key]['content_tag'], 0)->getPlainText();
				$data['content'] = str_replace("'", ' ', $data['content']);
				$data['content'] = str_replace('"', ' ', $data['content']);
			}else {
				$data['content'] = " ";
			}
			
			$data['url'] = $link;
			$data['site'] = $d[$key]['dbname'];
			dataToDB($data);
		}
	}
	function dataToDB($data){
		if(!insert_db($data)){
			die("aldaa insert hiih ued");
		}
	}



	function testData(){
		$d = data();
		$d1 = getNewsData("http://viva.mn/post/4878",$d[1]['head_tag'],$d[1]['content_tag']);
		print_r($d1);
	}
	function testContent(){
		
		$html = file_get_dom('http://viva.mn/post/4878');
		echo $html('article.clearfix em', 0)->getPlainText();

	}

	function test(){
		$a = array();
		for ($i=1; $i <11 ; $i++) { 
			$a[] = $i; 
		}
		$a[] = 1;
		$a[] = 112;
		$a[] = 1;
		$a[] = 111;
		print_r(array_unique($a));
		// $b = array();
		// for ($i=1; $i <5 ; $i++) { 
		// 	$b[] = $i; 
		// }

		// $results=array_diff( $a, $b);
		// print_r($results);
	}

?>