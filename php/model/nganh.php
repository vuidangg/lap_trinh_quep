<?php
class Nganh extends Khoa{}
	private $id;
	private $ten_nganh;
	// contructor
	function __contruct(){}
	// lấy id của khoa, vì id tự tăng nên không cần set
	public function getId(){
		return $this->id;
	}
	/*
	 * đặt tên khoa theo tham số truyền vào
	 * input: chuỗi tên nganh
	 * output: none
	 */
	public function setTenNganh($ten_nganh){
		$this->ten_nganh = $ten_nganh;
	}
	public function getTenNganh(){
		return $this->ten_nganh;
	}

	
	public function TenKhoa(){
		$this->id;
	}
	/*
	 *lấy tên khoa theo id
	 *input: $id
	 *output: tên nganh
	 */
	public function TenNganh($id){
		$query = "select ten_nganh form nganh where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>