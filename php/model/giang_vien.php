<?php
class giang_vien extends nganh{}
	private $id;
	private $ten_gv;
	private $ngay_sinh;
	private $dia_chi;
	private $so_dien_thoai;
	private $email;
	function __contruct(){}
	public function getId(){
		return $this->id;
	}
	/*ten_gv*/
	public function setTenGiangVien($ten_gv){
		$this->ten_gv = $ten_gv;
	}
	public function getTenGiangVien(){
		return $this->ten_gv;
	}
	/*ngay_sinh*/
	public function setNgaySinh($ngay_sinh){
		$this->ngay_sinh = $ngay_sinh;
	}
	public function getNgaySinh(){
		return $this->ngay_sinh;
	}
	/*dia_chi*/
	public function setDiaChi($dia_chi){
		$this->dia_chi = $dia_chi;
	}
	public function getDiaChi(){
		return $this->dia_chi;
	}
	/*sdt*/
	public function setSoDienThoai($so_dien_thoai){
		$this->so_dien_thoai = $so_dien_thoai;
	}
	public function getSoDienThoai(){
		return $this->so_dien_thoai;
	}
	/*email*/
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	

	public function TenNganh(){
		$this->id;
	}
	
	public function TenGiangVien($id){
		$query = "select ten_gv form giang_vien where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>