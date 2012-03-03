<?php

class Facebook {
	
	private $baseUrl = 'https://graph.facebook.com/';
	
	public function basicInfo($username){

		if($username !== ''){
			$url = $this->baseUrl . $username;
		}
		if($url !== ''){
			$data = $this->__apiCall($url);
		}
		return $data;

	}
	
	public function userProfilePicture($username, $size = 'square'){
	
		if($username !== ''){
			$url = $this->baseUrl . $username . '/picture?type=' . $size;
		}
		return $url;
		
	}
	
	public function searchPublicPosts($query){
	
		if($query !== ''){
			$url = $this->baseUrl . 'search?q=' . urlencode($query) . '&type=post';
		}
		if($url !== ''){
			$data = $this->__apiCall($url);
		}
		return $data;
		
	}
	
	public function searchPages($page){
		
		if($page !== ''){
			$url = $this->baseUrl . 'search?q=' . urlencode($page) . '&type=page';
		}

		if($url !== ''){
			$data = $this->__apiCall($url);
		}
		return $data;
		
	}
	
	public function searchEvents($event){
	
		if($event !== ''){
			$url = $this->baseUrl . 'search?q='.urlencode($event).'&type=event';
		}
		if($url !== ''){
			$data = $this->__apiCall($url);
		}
		return $data;
		
	}
	
	private function __apiCall($url){
	
		$raw = file_get_contents($url);
		$json = json_decode($raw, true);
		return $json;
		
	}
	
}