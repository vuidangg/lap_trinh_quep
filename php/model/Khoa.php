<?php
require_once("connect.php");
class Khoa{
	private $id;
	private $ten_khoa;
	private $connect = new Connect();
	// contructor
	function __contruct(){}

	// lấy id của khoa, vì id tự tăng nên không cần set
	public function getId(){
		return $this->id;
	}

	/*
	 * đặt tên khoa theo tham số truyền vào
	 * input: chuỗi tên khoa
	 * output: none
	 */
	public function setTenKhoa($ten_khoa){
		$this->ten_khoa = $ten_khoa;
	}

	public function getTenKhoa(){
		return $this->ten_khoa;
	}

	/*
	 *lấy tên khoa theo id
	 *input: $id
	 *output: tên khoa
	 */
	public function TenKhoa($id){
		$query = "select ten_khoa form khoa where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>