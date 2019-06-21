<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "Service";
	}
	public function getContact_Desc(){
		echo "getContact_Desc";	
	}
	public function getContact(){
		echo "getContact";	
	}
	public function random_data($set,$arr_amount,$row_amount, $col_amount){

		//หาว่าตัวเลขแต่ละตัวมีกี่ซ้ำ
		$set_amount = ($arr_amount * $row_amount*$col_amount)/($row_amount * $col_amount * $set);
		//สร้าง $arr มาเก็บข้อมูล
		$arr = array_fill(0, $arr_amount, 0);

		for ($i=0; $i < $arr_amount; $i++) { 
			$arr[$i] = array_fill(0, $row_amount*$col_amount, 0);
		}
		$count = 0;
		$num_var = 1;
		for ($i=0; $i < $row_amount*$col_amount; $i++) { 
			for ($j=0; $j < $arr_amount; $j++) { 
				if ($count == $set_amount) {
					$count = 1;
					$num_var++;
				}else{
					$count++;
				}
				//echo "[$j,$i = $num_var]<br/>";
				$temp_arr = $arr[$j];
				$temp_arr[$i] = $num_var;
				$arr[$j] = $temp_arr;
			}
			//สลับ 1 ครั้ง
			$arr = $this->random_array($arr,$this->get_random($arr_amount));
		}


		//$this->printarr($arr);
		//$this->get_random($arr_amount);
		
		//$this->printarr($arr);
		// Set Position to Array
		$new_arr = array();
		$arr_check = array();
		foreach ($arr as $key => $value) {
			$newposion = $this->get_random($row_amount*$col_amount);
			$temp_arr = array();
			$checkdata = "";
			foreach ($newposion as $key2 => $value2) {
				$temp_arr[$key2] = $value[$value2];
				$checkdata = $checkdata."[".$key2.",".$value[$value2]."]";
			}
			//ตรวจสอบว่ามีการสร้าง Sheet ซ้ำไหม
			if (in_array($checkdata, $arr_check)){
				//echo "<br/>Is Duplicate : ".$checkdata;
				//die();
			}
			$arr_check[$key] = $checkdata;
			$new_arr[$key] = $temp_arr;
		}
		return $new_arr;
	}

	function printarr($arr){
		$i=0;
		foreach ($arr as $value) {
			$j=0;
			foreach ($value as $key2 => $value2) {
				echo "[$i,$j = $value2]";
				$j++;
			}
			echo "<br/>";
			$i++;
		}
	}

	function get_random($arr_amount){
		//สร้าง $arr_random มาเก็บข้อมูลในการสุ่ม
		$arr_random = array_fill(0, $arr_amount, -99);
		for ($i=0; $i < $arr_amount; $i++) { 
			$num = rand (0,$arr_amount-1);
			$new_num = true;
			while ($new_num) {
				if (in_array($num, $arr_random)){
					$num++;
					if($num >= $arr_amount){
						$num = 0;
					}
				}else{
					$new_num = false;
				}
			}
			$arr_random[$i] = $num;
		}
		return $arr_random;

		//sort($arr_random);
		//echo "<hr>";
		//foreach ($arr_random as $value) {
		//	echo("[$value] ");
		//}
		//sort($arr_random);
		//echo "<hr>";
		//foreach ($arr_random as $value) {
		//	echo("[$value] ");
		//}
	}

	function random_array($arr,$arrindex){
		$new_arr = array();
		foreach ($arrindex as $key => $value) {
			$new_arr[$key] = $arr[$value];
		}
		return $new_arr;
	}

	function create_sheet(){
		$set = 3;
		$arr_amount = 1500;
		$sheet_size = 5;

		$this->load->model('BingoSheet');
		$data = $this->random_data($set,$arr_amount,$sheet_size,$sheet_size);
		//var_dump($data);
		$this->BingoSheet->insert_sheet($data,$sheet_size);
	}
}
