<?php
class cau_hoi extends de_thi{}
	private $id;
	private $noi_dung;
	private $muc_do;
	
	function __contruct(){}
	public function getId(){
		return $this->id;
	}
	
	public function setNoiDung($noi_dung){
		$this->noi_dung = $noi_dung;
	}
	public function getNoiDung(){
		return $this->noi_dung;
	}


	public function setMucDo($muc_do){
		$this->muc_do = $muc_do;
	}
	public function getMucDo(){
		return $this->muc_do;
	}
	

	public function de_thi(){
		$this->id;
	}
	
	public function cau_hoi($id){
		$query = "select noi_dung form cau_hoi where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>