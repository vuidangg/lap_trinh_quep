<?php
class mon extends nganh{}
	private $id;
	private $ten_mon;

	function __contruct(){}
	public function getId(){
		return $this->id;
	}

	public function setTenMon($ten_mon){
		$this->ten_mon = $ten_mon;
	}
	public function getTenMon(){
		return $this->ten_mon;
	}
	

	public function TenNganh(){
		$this->id;
	}
	
	public function TenNganh($id){
		$query = "select ten_mon form nganh where ID = " . $id;
		$result = $connect->getConnect();
	}
}
?>