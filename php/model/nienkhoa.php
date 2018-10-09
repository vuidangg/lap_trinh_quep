<?php
class Nienkhoa{}
	private $id;
	private $thoi_gian_bat_dau;
	private $thoi_gian_ket_thuc;
	// contructor
	function __contruct(){}
	// lấy id của nien khoa, vì id tự tăng nên không cần set
	public function getId(){
		return $this->id;
	}
	/*
	 * đặt thời gian bắt đầu theo tham số truyền vào
	 * input: chuỗi thời gian bắt đầu
	 * output: none
	 */
	public function setThoigianbatdau($thoi_gian_bat_dau){
		$this->thoi_gian_bat_dau = $thoi_gian_bat_dau;
	}
	public function getThoigianbatdau(){
		return $this->thoi_gian_bat_dau;
	}
	/*
	 * đặt thời gian kết thúc theo tham số truyền vào
	 * input: chuỗi thời gian kết thúc
	 * output: none
	 */
	public function setThoigianketthuc($thoi_gian_ket_thuc){
		$this->thoi_gian_ket_thuc = $thoi_gian_ket_thuc;
	}
	public function getThoigianketthuc(){
		return $this->thoi_gian_ket_thuc;
	}
	/*
	 *lấy thời gian bắt đầu theo id
	 *input: $id
	 *output: thời gian bắt đầu
	 */
	public function Thoigianbatdau($id){
		$query = "select thoi_gian_bat_dau form nien_khoa where ID = " . $id;
		$result = $connect->getConnect();
	}
	/*
	 *lấy thời gian kết thúc theo id
	 *input: $id
	 *output: thời gian kết thúc
	 */
	public function Thoigianketthuc($id){
		$query = "select thoi_gian_ket_thuc form nien_khoa where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>