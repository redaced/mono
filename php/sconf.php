<?php
	function data(){
		$data = array();


		$data[0]['site'] = "http://news.gogo.mn";
		$data[0]['news_url'] = "/r/";
		$data[0]['head_tag'] = "h1";
		$data[0]['content_tag'] = "div#ncbubuhome";
		$data[0]['banned'] = "";
		$data[0]['dbname'] = "gogo";


		$data[1]['site'] = "http://www.viva.mn";
		$data[1]['news_url'] = "/post/";
		$data[1]['head_tag'] = "div.portlet-title h1";
		$data[1]['content_tag'] = "article";
		$data[1]['banned'] = "#comments";
		$data[1]['dbname'] = "viva";

		$data[2]['site'] = "http://www.ikon.mn";
		$data[2]['news_url'] = "/n/";
		$data[2]['head_tag'] = "h1";
		$data[2]['content_tag'] = "div.icontent";
		$data[2]['banned'] = "#ikcomments";
		$data[2]['dbname'] = "ikon";
		
		return $data;
	}
?>