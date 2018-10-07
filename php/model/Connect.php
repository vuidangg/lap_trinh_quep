<?php
class Connect{
	private $connect;
	function __contructor(){}

	/*tao ket noi*/

	function getConnect(){
		$connect = mysqli_connect("localhost", "root", "", "lap_trinh_quep");
		if(!$connect){
			die("lỗi kết nối " . $connect->connect_errno . ": " . $connect->connect_error);
		}
		return $connect;
	}
}
?>