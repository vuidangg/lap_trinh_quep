<?php
class hinh_anh extends cau_hoi{}
	private $id;
	private $url;
	
	function __contruct(){}
	public function getId(){
		return $this->id;
	}
	
	public function seturl($url){
		$this->url = $url;
	}
	public function geturl(){
		return $this->url;
	}


	public function cau_hoi(){
		$this->id;
	}
	
	public function hinh_anh($id){
		$query = "select url form hinh_anh where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>