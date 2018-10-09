<?php
class dap_an extends cau_hoi{}
	private $id;
	private $noi_dung;
	private $trang_thai;

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

	public function setTrangThai($trang_thai){
		$this->trang_thai = $trang_thai;
	}
	public function getTrangThai(){
		return $this->trang_thai;
	}


	public function cau_hoi(){
		$this->id;
	}
	
	public function dap_an($id){
		$query = "select noi_dung form dap_an where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>