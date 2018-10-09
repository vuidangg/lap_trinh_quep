<?php
class Lop extends Nienkhoa extends nganh{}
	private $id;
	private $nam;
	private $ten_lop
	// contructor
	function __contruct(){}
	// lấy id của lop, vì id tự tăng nên không cần set
	public function getId(){
		return $this->id;
	}
	/*
	 * đặt năm theo tham số truyền vào
	 * input: chuỗi năm
	 * output: none
	 */
	public function setNam($nam){
		$this->nam = $nam;
	}
	public function getnam(){
		return $this->nam;
	}
	/*
	 * đặt tên lớp theo tham số truyền vào
	 * input: chuỗi tên lớp
	 * output: none
	 */
	public function setTenlop($ten_lop){
		$this->ten_lop = $ten_lop;
	}
	public function getTenlop(){
		return $this->ten_lop;
	}
	
	public function TenNganh(){
		$this->id;
	}
	public function Thoigianbatdau(){
		$this->id;
	}
	public function Thoigianketthuc(){
		$this->id;
	}
	/*
	 *lấy tên lớp theo id
	 *input: $id
	 *output: tên lớp
	 */
	public function TenLop($id){
		$query = "select ten_lop form lop where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>