<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Api extends CI_Controller {
	public function index()
	{
		echo "Service";
	}
	
	public function getbingocard(){
	    /*
	     * Function name: getBingoCard 
	     * param: userID
	     * return: json user_id, 
	     * */
	    //var_dump($_POST);
	    $name = $_POST["name"];
	    $code_id = $_POST["userId"];
	    
//	    $name = "เจริญพร  บัวแย้ม";
//	    $code_id= "W00000";
	    
	    $this->load->model('BingoModel');
	    $data = $this->BingoModel->getBigoSheet($code_id,$name);
	    
	    echo json_encode($data);
	}
	
	public function checkbingo(){
	    //$name = "เจริญพร  บัวแย้ม";
	    //$code_id= "W00000";
	    $this->load->model('BingoModel');
	    //$values = $this->BingoModel->getBingoValue();
	    //print_r($values);
	    
	    
	    $code_id = "w0001";
	    $round = 1;
	    
	    /*$code_id = $_POST['userId'];
	    $round = $_POST['round'];
	    $positions = $_POST['positions'];*/
	    
	    $_isbingo = false;
	    if($round != $this->BingoModel->getOnlineGame()){
	        $positions = array('0','1','2','3','4','5','6','7','8','9','12','17','22');
	        //4,9,14,19,24
	        if($this->BingoModel->chkAll($positions)){
	            
	        }
	    }else{
	        $_isbingo = false;
	    }
	    
	    
	    $data = array('status'=>$_isbingo);
	    echo json_encode($data);
	    
	    
	   
	}
	public function getround(){
	    $this->load->model('BingoModel');
	    $round = $this->BingoModel->getOnlineGame();
	    echo json_encode(array("round"=>$round));
	}
	
	
}
