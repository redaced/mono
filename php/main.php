<?php 

	include('ganon.php');
	include('dbHandler.php');

	function getLinks($link,$tag){
		$html = file_get_dom($link);
		$getlink = array();
		foreach($html($tag) as $element) {
			$getlink [] = $element->href;
		}
		return $getlink;
	}

	function getNews($links,$tag,$main_link){
		$urls = select_db();
		$permitted = array();
		$a = 0;
		foreach ($links as $link) {
			if(strstr($link, $tag)){
				$link = str_replace($main_link, '', $link);
				$permitted[$a] = $link;
				$a++;
			}
		}
		$results=array_diff( $permitted, $urls);
		return array_unique($results); // adilhan link uudiig ustgah
	}

	function getNewsData($link,$head_tag,$content_tag){
			$html = file_get_dom($link);
			$data = array();
			$data['title'] = $html($head_tag, 0)->getPlainText();
			$data['content'] = $html($content_tag, 0)->getPlainText();
			$data['content'] = str_replace("'", ' ', $data['content']);
			return $data;
	}
	function dataToDB($url,$data){
		if(!insert_db("gogo",$url,$data['title'],$data['content'])){
			die("aldaa insert hiih ued");
		}
	}
?>