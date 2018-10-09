<?php
class de_thi extends giang_vien{}
	private $id;
	private $so_cau_hoi;
	private $ghi_chu;
	private $ngay_ra_de;
	private $hoc_ky;
	private $nam_hoc;
	function __contruct(){}
	public function getId(){
		return $this->id;
	}
	
	public function setSoCauHoi($so_cau_hoi){
		$this->so_cau_hoi = $so_cau_hoi;
	}
	public function getSoCauHoi(){
		return $this->so_cau_hoi;
	}


	public function setGhiChu($ghi_chu){
		$this->ghi_chu = $ghi_chu;
	}
	public function getGhiChu(){
		return $this->ghi_chu;
	}
	

	public function setNgayRaDe($ngay_ra_de){
		$this->ngay_ra_de = $ngay_ra_de;
	}
	public function getNgayRaDe(){
		return $this->ngay_ra_de;
	}
	

	public function setHocKi($hoc_ky){
		$this-> = $hoc_ky;
	}
	public function getHocKi(){
		return $this->hoc_ky;
	}


	public function setNamHoc($nam_hoc){
		$this->nam_hoc= $nam_hoc;
	}
	public function getNamHoc(){
		return $this->nam_hoc;
	}
	

	public function giang_vien(){
		$this->id;
	}
	
	public function ten_gv($id){
		$query = "select ten_gv form de_thi where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>